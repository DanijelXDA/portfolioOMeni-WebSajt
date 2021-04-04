<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];

    $formcontent="Име: $name \nE-адреса: $email\nПорука: $message\nТелефон: $phone\n";
    
    file_put_contents("kontakt-forme.txt", $formcontent);
?>

