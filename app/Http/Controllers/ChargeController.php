<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;

class ChargeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $env = config('app.env');
        $apiKeySec = '';
        $apiKeyPub = '';
        if ($env == 'production') {
            $apiKeySec = config('payjp.apikey.prod.sec');
            $apiKeyPub = config('payjp.apikey.prod.pub');
        } else {
            $apiKeySec = config('payjp.apikey.test.sec');
            $apiKeyPub = config('payjp.apikey.test.pub');
        }
        return $apiKeySec . ' ' . $apiKeyPub;
    }
}
