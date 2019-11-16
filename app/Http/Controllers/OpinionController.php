<?php

namespace App\Http\Controllers;

use App\Mail\OpinionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OpinionController extends Controller
{

    public function sendmail(Request $request)
    {
        Mail::to(config('mail.from.address'))
        ->send(new OpinionMail($request->comment));

        return redirect()->back();
    }

    
}
