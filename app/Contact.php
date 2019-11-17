<?php

namespace App;

class Contact
{
    public static $rules = array(
        // 'title' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    );
}
