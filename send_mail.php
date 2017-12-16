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

$email = $_POST['email'];
$subject = $_POST['title'];
$message = $_POST['message'];
$name = $_POST['first-name'].$_POST['last-name'];

require 'vendor/autoload.php';

$from = new SendGrid\Email($name, $email);
$to = new SendGrid\Email(null, "chungan@uchicago.edu");
$content = new SendGrid\Content("text/plain", $message);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo '<br>';
echo $response->headers();
echo '<br>';
echo $response->body();
?> 
