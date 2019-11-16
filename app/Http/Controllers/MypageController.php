<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
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
    
    public function index()
    {
        // 現在ログインしているユーザー情報(DBデータ)を取得
        $user_data = Auth::user();
        $common = new \Common;
        $course_name = $common->getCourseName();
        return view('mypage', [
            'user_data' => $user_data,
            'course_name' => $course_name,
        ]);
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
