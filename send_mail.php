<?php
/*
$to      = 'chungan@uchicago.edu';
$email = $_POST['email'];
$subject = $_POST['title'];
$message = $_POST['message'];
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: chungan@uchicago.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
*/

$to = "chungan@uchicago.edu";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?> 
