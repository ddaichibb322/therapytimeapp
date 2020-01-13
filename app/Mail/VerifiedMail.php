<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Lang;


class VerifiedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * 新しいメッセージインスタンスの生成
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(Lang::get('message.Mail.Verified.Title'))
        ->view('email.verified');
    }
}
