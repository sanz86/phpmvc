<?php

class Mail {
	public $to ,$subject, $message ,$headers ;
}

class Mailer {
	function __construct() {
		;
	}
	
	public static function sendMail($mail)
	{

		// In case any of our lines are larger than 70 characters, we should use wordwrap()
		$message = wordwrap($mail->message, 70, "\r\n");
		
		// Send
		mail($mail->to, $mail->subject, $message,$mail->headers);
	}
}