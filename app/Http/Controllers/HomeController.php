<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function agreement()
    {
        return view('agreement');
    }

    public function policy()
    {
        return view('policy');
    }

    public function tokutei()
    {
        return view('tokutei');
    }

    
}
