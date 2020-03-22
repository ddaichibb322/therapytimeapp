<?php

namespace App\Http\Controllers;

use App\Course;
use App\Mail\ChargedMail;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ChargeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index($course_cd)
    {
        try {
            // コースコードがなければ、不正なURLなので404
            if (empty($course_cd)) {
                abort(404);
            }
            // 有料会員の場合は表示させない
            $common = new \Common;
            if ($common->isPaidMember()) {
                return redirect()->route('mypage');
            }
            // コースコードからコースデータが取得できなければ、不正なURLなので404
            $course = Course::where('course_cd', $course_cd)->first();
            if (empty($course)) {
                abort(404);
            }
            $env = config('app.env');
            $apiKeyPub = '';

            if ($env == 'production') {
                $apiKeyPub = config('payment.apikey.prod.pub');
            } else {
                $apiKeyPub = config('payment.apikey.test.pub');
            }

            $user = Auth::user();
            return view('charge', [
                'apiKeyPub' => $apiKeyPub,
                'course' => $course,
                'user' => $user,
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage(), ['file' => __FILE__, 'line' => __LINE__]);
            abort(500);
        }
    }

    public function createSub(Request $request)
    {
        try {
            $env = config('app.env');

            if ($env == 'production') {
                $apiKeySec = config('payment.apikey.prod.sec');
            } else {
                $apiKeySec = config('payment.apikey.test.sec');
            }
            \Stripe\Stripe::setApiKey($apiKeySec);
            $course_cd = $request->course_cd;
            $email = $request->stripeEmail;
            $token = $request->stripeToken;

            if (empty($course_cd) || empty($email) || empty($token)) {
                throw new \Exception('course_cd or email or token does not exist');
            }

            // コース情報を取得
            $course = Course::where('course_cd', $course_cd)->first();
            if (empty($course) || empty($course->plan_cd)) {
                throw new \Exception("invalid course_cd");
            }
            $course_id = $course->id;
            $plan_cd = $course->plan_cd;

            // TODO: ユーザーにもメールしたい。

            // 管理者にメール
            Mail::to(config('mail.from.address'))
            ->send(new ChargedMail($email, $course));

            // 顧客を作成
            $cus = \Stripe\Customer::create([
                'email' => $_POST['stripeEmail'],
                'source'  => $_POST['stripeToken'],
            ]);
            if (empty($cus->id)) {
                throw new \Exception("no customer id");
            }
            $pay_id = $cus->id;

            // 次回フル課金日(翌月1日)を計算する処理。
            // 課金サイクルは、当月1日支払い。
            // 初回（決済完了時）には、次回課金日までの日割り。
            $dt = new Carbon();
            $dt->addMonthNoOverflow();
            $dt->day = 1;
            $dt->hour = 11;
            $dt->minute = 0;
            $dt->second = 0;

            // 定期課金を作成
            \Stripe\Subscription::create([
                'customer' => $pay_id,
                'billing_cycle_anchor' => $dt->getTimestamp(),
                'trial_from_plan' => true,
                "items" => [
                    [
                        "plan" => $plan_cd,
                    ],
                ],
            ]);

            // 決済情報をDBに保存
            $payment = new Payment();
            $user = Auth::user();
            $payment->fill([
                'user_id' => $user->id,
                'pay_at' => Carbon::now(),
                'pay_id' => $pay_id,
                'course_id' => $course_id,
            ])->save();

            return redirect()->route('mypage')->with('success', '決済が完了しました。');          
        } catch (\Stripe\Exception\RateLimitException $e) {
            // Too many requests made to the API too quickly
            \Log::error($e->getError()->message);
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("pay_at:" . Carbon::now());
            \Log::error("pay_id:" . $pay_id);
            \Log::error("course_id:" . $course_id);
            return redirect()->back()->withErrors(['エラーが発生しました。時間を空けて再度お試しください。'])->withInput();
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            // Invalid parameters were supplied to Stripe's API
            \Log::error($e->getError()->message);
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("pay_at:" . Carbon::now());
            \Log::error("pay_id:" . $pay_id);
            \Log::error("course_id:" . $course_id);
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();
        } catch (\Stripe\Exception\AuthenticationException $e) {
            // Authentication with Stripe's API failed
            // (maybe you changed API keys recently)
            \Log::error($e->getError()->message);
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("pay_at:" . Carbon::now());
            \Log::error("pay_id:" . $pay_id);
            \Log::error("course_id:" . $course_id);
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();            
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            // Network communication with Stripe failed
            \Log::error($e->getError()->message);
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("pay_at:" . Carbon::now());
            \Log::error("pay_id:" . $pay_id);
            \Log::error("course_id:" . $course_id);
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Display a very generic error to the user, and maybe send
            // yourself an email
            \Log::error($e->getError()->message);
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("pay_at:" . Carbon::now());
            \Log::error("pay_id:" . $pay_id);
            \Log::error("course_id:" . $course_id);
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();            
        } catch (\Exception $e) {
            \Log::error($e->getMessage(), ['file' => __FILE__, 'line' => __LINE__]);
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("pay_at:" . Carbon::now());
            \Log::error("pay_id:" . $pay_id);
            \Log::error("course_id:" . $course_id);
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();
        }
    }
}
