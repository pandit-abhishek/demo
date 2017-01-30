<?php
	
	echo 'here';die;
	/*require 'PHPMailerAutoload.php';
	require_once ("class.smtp.php");	
	require_once ('class.phpmailer.php');

	
	$mail = new PHPMailer();
	
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465'; 
	$mail->Username = "abhi.ashish2014@gmail.com";  
	$mail->Password = "9128944934";           
	$mail->SetFrom("abhi.ashish2014@gmail.com", "Abhishek");
	$mail->Subject = "Testing";
	$mail->Body = "Hello";
	$mail->AddAddress("abhi.ashish2015@gmail.com");
	

	if(!$mail->send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		
		echo $error;
	} else {
		echo 'Message sent!';
		
	}
*/




	/*include_once "./swift/lib/swift_required.php";
	$from = array('abhi.ashish2014@gmail.com' => 'Abhishek');
	$to = array('abhi.ashish2015@gmail.com'=>'Abhishek');
	$subject = 'JangoSMTP Transactional Email from PHP';

	$username = 'pointclub';
	$password = 'PCemailsystem';


	$transport = Swift_SmtpTransport::newInstance('relay.jangosmtp.net', 25);
	$transport->setUsername($username);
	$transport->setPassword($password);
	$swift = Swift_Mailer::newInstance($transport);
	$message = new Swift_Message($subject);

	$message->setFrom($from);
	// $message->setBody($html, 'text/html');
	$message->setTo($to);
	// $message->addPart($text, 'text/plain');
	// echo "<pre>";print_r($transport);die;
	if ($recipients = $swift->send($message, $failures))
	{
		echo 'Email sent to '.$recipients.' users';
	}*/