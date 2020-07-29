<?php
	ini_set('display_errors', 1);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'roseb5@wit.edu';
	$email_subject = "New Form Submission";
	$email_body = "You have recieved a message from the user $name.\n".
					"Subject: $subject\n"
					"Message: $message\n".
	$to = "roseb5@wit.edu";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $email \r\n";
	mail($to, $email_subject, $email_body, $headers);
	header('Location: home.html');
?>
