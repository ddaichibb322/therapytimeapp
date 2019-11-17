<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMail;
use App\Mail\ContactDoneMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }

    public function sendmail(Request $request)
    {
        $validatedData = $request->validate(Contact::$rules);

        var_dump($validatedData);
        // 送信者にメール
        Mail::to($validatedData['email'])
        ->send(new ContactDoneMail($validatedData));

        var_dump($validatedData);
        // 管理者にメール
        Mail::to(config('mail.from.address'))
        ->send(new ContactMail($validatedData));

        var_dump($validatedData);
        return redirect()->back();
    }

    
}
