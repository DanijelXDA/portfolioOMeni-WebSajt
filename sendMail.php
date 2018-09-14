<?php 
	$ime = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="Име: $ime \nE-адреса: $email\nПорука: $message\n";
	$recipient = "danijelj2001.xda@gmail.com";
	$subject = "Питање/Сугестија | Техничка школа";
	$headers = 'From: no-reply@portfolio.edu.rs' . "\r\n" .
		'Reply-To: no-reply@portfolio.edu.rs' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	mail($recipient, $subject, $formcontent, $headers) or die("Greska!");
	header( 'Location: index.html' );
?>