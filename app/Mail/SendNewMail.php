<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $userName;
    protected $userMail;
    protected $userMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName, $userMail, $userMessage)
    {
        $this->userName = $userName;
        $this->userMail = $userMail;
        $this->userMessage = $userMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->userMail)->view('email.body', 
        ["userName" => $this->userName, "userMail" => $this->userMail, "userMessage" =>$this->userMessage]);
    }
}
