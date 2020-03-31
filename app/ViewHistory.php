<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewHistory extends Model
{
    protected $fillable = [
        'content_id', 'user_id', 'start_at', 'end_at'
    ];
}
