<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChargedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $course;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $course)
    {
        $this->email = $email;
        $this->course = $course;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('有料コースへの加入が行われました')
        ->view('email.charged');
    }
}
