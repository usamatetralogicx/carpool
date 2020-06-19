<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class VerifyEmail extends Mailable
{
use Queueable, SerializesModels;

/**
* Create a new message instance.
*
* @return void
*/
public $verifyToken;
// public $username;
public function __construct($verifyToken)
{
	$this->verifyToken=$verifyToken;
 // $this->username = $username;

// dd($verifyToken);
}

/**
* Build the message.
*
* @return $this
*/
public function build()
{
return $this->from('noreply@syedalizia.com')
->view('emails.verify')
->with([$this->verifyToken]);
}
}