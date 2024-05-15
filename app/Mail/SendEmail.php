<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
use Queueable, SerializesModels;

public $data; // Define the $data property

/**
* Create a new message instance.
*
* @param  array  $data  The data array containing recipient, subject, and message
* @return void
*/
public function __construct($data)
{
$this->data = $data; // Assign the $data array to the class property
}

/**
* Build the message.
*
* @return $this
*/
public function build()
{
return $this->subject($this->data['subject'])
->view('emails.send-email-template')
->with('data', $this->data);
}
}
