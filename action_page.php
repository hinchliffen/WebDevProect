<?php
	ini_set('display_errors', 1);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	//$email_from = 'roseb5@wit.edu';
	//$email_subject = "New Form Submission";
	//$email_body = "You have recieved a message from the user $name.\n".
	//				"Subject: $subject\n"
	//				"Message: $message\n".
	$to = "bryanrose147@gmail.com";
	//$headers = "From: $email_from \r\n";
	//$headers .= "Reply-To: $email \r\n";

	if (mail($to,$subject, $message)
	{
		header('Location: home.html');	
	}
	else 
	{
		header('Location: contact.html');
	}
?>
