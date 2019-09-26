<?php

namespace App\Http\Controllers;

use App\User;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list()
    {
        $user_data = Auth::user();
        $contents_data = Content::all();
        return view('session.list', ['user_data' => $user_data, 'contents_data' => $contents_data ,]);
    }

    public function detail($id)
    {
        $user_data = Auth::user();
        $content_detail_data = Content::find($id);
        if (empty($content_detail_data)) {
            return redirect()->route('session');
        }
        return view('session.detail', ['user_data' => $user_data, 'content_detail_data' => $content_detail_data,]);
    }

}
