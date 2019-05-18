<?php
	$name = $_POST['name'];
	$from = $_POST['email'];
	$message = $_POST['message'];
	$to = "m.mohsin.shahzad0582@gmail.com";
	$subject = $_POST['subject'];
	$headers= "From: $from \r\n";
	$headers .= "Reply-To: $to \r\n";
	
	$body="User Name: $name.\n".
			"User Email: $from.\n".
				"User message: $message.\n";
	mail($to, $subject, $body, $headers);
	header("location:contactUS.php");
?>