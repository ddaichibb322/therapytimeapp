<?php

namespace App\Http\Controllers;

use App\Course;
use App\Content;
use App\Viewable;
use App\Payment;
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
        $contents_db_data = Content::all();
        $courses_db_data = Course::all();

        $viewables_data = $this->createViewablesData();
        
        $common = new \Common;
        $course_name = $common->getCourseName();

        return view('session.list', [
            'user_data' => $user_data, 
            'contents_data' => $contents_db_data,
            'viewables_data' => $viewables_data,
            'courses_data' => $courses_db_data,
            'course_name' => $course_name,
        ]);
    }

    public function detail($id)
    {
        $user_data = Auth::user();
        $content_detail_data = Content::find($id);

        if (empty($content_detail_data)) {
            return redirect()->route('session');
        }

        $viewables_data = $this->createViewablesData();

        // このセッションを開いたユーザが、このセッションを閲覧可能ならばtrue
        $is_viewable = false;
        // ログインしていてかつメール認証も完了していればtrue
        $is_login = false;
        // 無料会員ならばtrue
        $is_free = false;

        $payment_db_data = '';
        if (Auth::check() && optional(Auth::user())->hasVerifiedEmail()) {
             // ログインしていてかつメール認証も完了している
            $is_login = true;
            $payment_db_data = Payment::where('user_id', $user_data->id)
                ->where('invalid_flg', 0)
                ->where('del_flg', 0)
                ->orderBy('created_at', 'desc')
                ->first();

            if (empty($payment_db_data)) {
                // paymentテーブルにレコードがなければ無料会員
                $is_free = true;
            }
        }

        if ($content_detail_data->viewable_flg == 2) {
            // 全員視聴可能
            $is_viewable = true;
        } else if ($content_detail_data->viewable_flg == 1) {
            // 会員であれば視聴可能
            // ログインしていれば会員と判断
            if ($is_login) {
                $is_viewable = true;
            }
        } else {
            // 加入しているコースでこの動画を視聴できるかチェック
            $course_ids = $viewables_data[$content_detail_data->type->id];
            if (!empty($payment_db_data) && in_array($payment_db_data->course_id, $course_ids)) {
                $is_viewable = true;
            }
        }

        $common = new \Common;
        $course_name = $common->getCourseName();
        
        return view('session.detail', [
            'user_data' => $user_data, 
            'content_detail_data' => $content_detail_data,
            'is_viewable' => $is_viewable, 
            'is_login' => $is_login, 
            'is_free' => $is_free, 
            'course_name' => $course_name,
        ]);
    }

    /*
    * 「type_id => course_idの配列」 の配列を作る
    */
    private function createViewablesData() 
    {
        $viewables_db_data = Viewable::all();
        $viewables_data = [];

        foreach ($viewables_db_data as $key => $val) {
            $type_id = $viewables_db_data[$key]['type_id'];
            $course_id = $viewables_db_data[$key]['course_id'];
            
            if (array_key_exists($type_id, $viewables_data)) {
                // course_idの配列に要素を追加する
                array_push($viewables_data[$type_id], $course_id);
            } else {
                // course_idの配列を新規作成し、要素を追加する
                $course_ids = [$course_id];
                $viewables_data += [$type_id => $course_ids];
            }
        }

        return $viewables_data;
    }

}
