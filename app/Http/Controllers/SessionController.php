<?php

namespace App\Http\Controllers;

use App\Course;
use App\Content;
use App\Viewable;
use App\ViewHistory;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function show()
    {
        $user_data = Auth::user();
        $contents_db_data = Content::orderBy('sort', 'asc')->get();
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
        // paymentテーブルから最新のレコードを取り出す。
        $payment_db_data = Payment::where('user_id', optional($user_data)->id)
        ->where('invalid_flg', 0)
        ->where('del_flg', 0)
        ->orderBy('created_at', 'desc')
        ->first();

        if (empty($content_detail_data)) {
            return redirect()->route('session');
        }

        $viewables_data = $this->createViewablesData();

        // このセッションを開いたユーザが、このセッションを閲覧可能かどうかを判定するフラグ。閲覧可能ならばtrue。
        $is_viewable = false;

        if (optional($user_data)->free_flg== 1) {
            // 無料招待ユーザであれば視聴可能
            $is_viewable = true;
        } else if ($content_detail_data->viewable_flg == 2) {
            // 誰でも（非会員でも)視聴可能
            $is_viewable = true;
        } else if ($content_detail_data->viewable_flg == 1) {
            // ユーザー登録とメールアドレス認証が完了していれば視聴可能
            if (Auth::check() && optional($user_data)->hasVerifiedEmail()) {
                $is_viewable = true;
            }
        } else {
            // 加入しているコースでこの動画を視聴できるかチェック
            $course_ids = $viewables_data[$content_detail_data->type->id];
            if (!empty($payment_db_data) && in_array($payment_db_data->course_id, $course_ids)) {
                $is_viewable = true;
            }
        }

        // ユーザーデータがあれば視聴履歴に登録
        if (optional($user_data)->id) {
            $view_history = new ViewHistory();
            $view_history->fill([
                'content_id' => $id, 
                'user_id' => $user_data->id
            ]);
            $view_history->save();
            $view_history_id = $view_history->id;
        }

        $common = new \Common;
        $course_name = $common->getCourseName();
        
        return view('session.detail', [
            'user_data' => $user_data, 
            'content_detail_data' => $content_detail_data,
            'is_viewable' => $is_viewable,
            'course_name' => $course_name,
            'view_history_id' => $view_history_id ? $view_history_id : null,
        ]);
    }

    public function update($id)
    {
        \Log::error("pay_at:" . Carbon::now());
        ViewHistory::find($id)->update(['end_at' => Carbon::now()]);
        // TODO: 200を返す
        return null;
    }    

    /*
    * コンテンツのタイプと、そのタイプを閲覧可能なコースの組み合わせを作る。
    * 「type_id => course_idの配列」 の配列を返す。
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
