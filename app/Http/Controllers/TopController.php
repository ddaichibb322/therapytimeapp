<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // 有料会員の場合はマイページへ
        $common = new \Common;
        if ($common->isPaidMember()) {
            return redirect()->route('mypage');
        }

        return view('top');
    }
}
