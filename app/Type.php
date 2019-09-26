<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public function contents() {
        return $this->hasMany('App\Content');
    }
    //
    public function viewables() {
        return $this->hasMany('App\Viewable');
    }
}
