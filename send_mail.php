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

require 'vendor/autoload.php';

$email = $_POST['email'];
$subject = $_POST['title'];
$message = $_POST['message'];
$name = $_POST['first-name']." ".$_POST['last-name'];
print_r($_GET);

/*
echo $email;
echo $subject;
echo $message;
echo $name;

echo $email.'<br>';
echo $subject.'<br>';
echo $message.'<br>';
echo $name.'<br>';
*/

$from = new SendGrid\Email($name, $email);
$to = new SendGrid\Email(null, "chungan@uchicago.edu");
$content = new SendGrid\Content("text/plain", $message);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

/*
echo $from;
echo "<br>";
echo $to;
echo "<br>";
echo $content;
echo "<br>";
echo $subject;
echo "<br>";

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo '<br>';
echo $response->headers();
echo '<br>';
echo $response->body();
*/
?> 
