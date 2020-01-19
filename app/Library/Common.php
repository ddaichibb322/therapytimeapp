<?php
namespace app\Library;

use App\Payment;
use App\Course;
use Illuminate\Support\Facades\Auth;

class Common
{
    private static $free_user_course_name = "無料会員";

    private static $free_user_course_price = 0;


    public function getCourseName() {
        if (!Auth::check()){
            return '';
        }

        $payment_db_data = Payment::where('user_id', Auth::user()->id)
                ->where('invalid_flg', 0)
                ->where('del_flg', 0)
                ->orderBy('created_at', 'desc')
                ->first();
        
        if (empty($payment_db_data->course_id)) {
            return self::$free_user_course_name;
        }

        return Course::find($payment_db_data->course_id)->name;
        
    }

    public function getCoursePrice() {
        if (!Auth::check()){
            return '';
        }

        $payment_db_data = Payment::where('user_id', Auth::user()->id)
                ->where('invalid_flg', 0)
                ->where('del_flg', 0)
                ->orderBy('created_at', 'desc')
                ->first();
        
        if (empty($payment_db_data->course_id)) {
            return self::$free_user_course_price;
        }

        return Course::find($payment_db_data->course_id)->price;
        
    }

    public function isPaidMember() {
        if (!Auth::check()){
            return false;
        }

        $payment_db_data = Payment::where('user_id', Auth::user()->id)
                ->where('del_flg', 0)
                ->orderBy('created_at', 'desc')
                ->first();
        
        if (empty($payment_db_data->course_id)) {
            return false;
        }

        return true;
        
    }
}