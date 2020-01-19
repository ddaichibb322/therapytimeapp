<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $env = config('app.env');
        $apiKeyPub = '';

        if ($env == 'production') {
            $apiKeyPub = config('payment.apikey.prod.pub');
        } else {
            $apiKeyPub = config('payment.apikey.test.pub');
        }

        return view('plan', ['apiKeyPub' => $apiKeyPub]);
    }
}
