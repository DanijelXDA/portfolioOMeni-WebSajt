<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    
    date_default_timezone_get ('Europe/Belgrade');
    $vreme = date("d.m.Y H:i", time());

    $formcontent="Име: $name \nE-адреса: $email\nПорука: $message\nТелефон: $phone\nВреме слања: $vreme\n\n";
    $file = "../kontakt-forme";
    file_put_contents($file, "\xEF\xBB\xBF".  $formcontent,  FILE_APPEND); 
    header("Location: sent.html")
?>
