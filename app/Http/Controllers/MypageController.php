<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // 現在ログインしているユーザー情報(DBデータ)を取得
        $user_data = Auth::user();
        return view('mypage', ['user_data' => $user_data]);
    }

    public function update(Request $request, $id) 
    {
        $validatedData = $request->validate(User::$rules);
        unset($validatedData['email']);
        $user = User::find($id);
        $user->fill($validatedData)->save();
        return redirect()->route('mypage');
    }
}
