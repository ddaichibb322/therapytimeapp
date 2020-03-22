<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMail;
use App\Mail\ContactDoneMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        try {
            $user_data = Auth::user();

            return view('contact', [
                'user_data' => $user_data
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage(), ['file' => __FILE__, 'line' => __LINE__]);
            abort(500);
        }        
    }

    public function sendmail(Request $request) {
        try {
            $validatedData = $request->validate(Contact::$rules);

            // 送信者にメール
            Mail::to($validatedData['email'])
            ->send(new ContactDoneMail($validatedData));

            // 管理者にメール
            Mail::to(config('mail.from.address'))
            ->send(new ContactMail($validatedData));

            return redirect()->back()->with('success', '送信が完了しました。');
        } catch (\Exception $e) {
            \Log::error($e->getMessage(), ['file' => __FILE__, 'line' => __LINE__]);
            return redirect()->back()->withErrors(['エラーが発生しました。お問い合わせよりご連絡ください。'])->withInput();
        }         
    }    
}
