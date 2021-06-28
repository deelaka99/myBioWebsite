<?php
	$name = $_POST['Name'];
	$visitor_email = $_POST['Email'];
	$email_subject = $_POST['Subject'];
	$message = $_POST['Message'];

	$email_from = 'deelaka@official.com';
	$email_body = "User Name: $name\n"."User Email: $visitor_email\n"."Subject: $email_subject\n"."User Message: $message\n";
	$to = "deelakasphotography@gmail.com";
	$headers = "From: $email_from\r\n";
	$headers .="Reply-To: $visitor_email\r\n";
	mail($to, $email_subject, $email_body,$headers);
	header("Location: index.html");
?>