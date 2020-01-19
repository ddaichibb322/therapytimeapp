<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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
        // コースコードがなければ、不正なURLなので404
        if (empty($course_cd)) {
            abort(404);
        }

        // 有料会員の場合は表示させない
        $common = new \Common;
        if ($common->isPaidMember()) {
            return redirect()->route('mypage');
        }

        try {
            // コースコードからコースデータが取得できなければ、不正なURLなので404
            $course = Course::where('course_cd', $course_cd)->first();
            if (empty($course)) {
                abort(404);
            }
        } catch(Exception $e){
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
    }

    public function createSub(Request $request)
    {
        $env = config('app.env');

        $apiKeySec = '';

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
            \Log::error("invalid parameter");
            \Log::error("course_cd:" . $course_cd);
            \Log::error("email:" . $email);
            \Log::error("token:" . $token);
            \Log::error("user_id:" . Auth::user()->id);
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();
        }

        $plan_cd = '';
        try {
            $course = Course::where('course_cd', $course_cd)->first();
            if (empty($course) || empty($course->plan_cd)) {
                throw new Exception("invalid course_cd");
            }
            $course_id = $course->id;
            $plan_cd = $course->plan_cd;
        } catch(Exception $e){
            \Log::error("error occured when finding course");
            \Log::error("course_cd:" . $course_cd);
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("error message:" . $e->getMessage());
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();
        }

        $pay_id = '';
        // 顧客を作成
        try {
            $cus = \Stripe\Customer::create([
                'email' => $_POST['stripeEmail'],
                'source'  => $_POST['stripeToken'],
            ]);

            if (empty($cus->id)) {
                throw new Exception("no customer id");
            }

            $pay_id = $cus->id;
        } catch (Exception $e) {
            \Log::error("error occured when creating customer");
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("error message:" . $e->getMessage());
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();

        }

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
        try {
            \Stripe\Subscription::create([
                'customer' => $pay_id,
                'billing_cycle_anchor' => $dt->getTimestamp(), 
                'trial_from_plan' => false,
                "items" => [
                    [
                      "plan" => $plan_cd,
                    ],
                ],
            ]);
        } catch (Exception $e) {
            \Log::error("error occured when creating subscription");
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("error message:" . $e->getMessage());
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();
        }

        // 顧客をDBに保存
        try {
            $payment = new Payment();
            $user = Auth::user(); 

            $payment->fill([
                'user_id' => $user->id,
                'pay_at' => Carbon::now(),
                'pay_id' => $pay_id,
                'course_id' => $course_id,
            ])->save();
        } catch(Exception $e){
            \Log::error("error occured when inserting into db");
            \Log::error("user_id:" . Auth::user()->id);
            \Log::error("token:" . $token);
            \Log::error("pay_at:" . Carbon::now());
            \Log::error("pay_id:" . $pay_id);
            \Log::error("course_id:" . $course_id);
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();
        }
        
        return view('paycomplete');
        
    }
}
