<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id', 'pay_at', 'pay_id', 'course_id', 'memo', 'invalid_flg', ''
    ];
}
