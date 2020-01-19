<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        return view('mypage', [
            'user_data' => $user_data,
            'course_name' => $common->getCourseName(),
            'course_price' => $common->getCoursePrice()
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

    public function showChangePasswordForm() {
        return view('auth.change_password');
    }

    public function changePassword(Request $request) {
        //現在のパスワードが正しいかを調べる
        if(!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with('change_password_error', '現在のパスワードが間違っています。');
        }

        //現在のパスワードと新しいパスワードが違っているかを調べる
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            return redirect()->back()->with('change_password_error', '新しいパスワードが現在のパスワードと同じです。違うパスワードを設定してください。');
        }

        //パスワードのバリデーション。新しいパスワードは6文字以上、new-password_confirmationフィールドの値と一致しているかどうか。
        $validated_data = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //パスワードを変更
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with('change_password_success', 'パスワードを変更しました。');
    }

    
}
