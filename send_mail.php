<?php

require 'vendor/autoload.php';

$email = $_POST['email'];
$subject = $_POST['title'];
$message = $_POST['message'];
$name = $_POST['first-name']." ".$_POST['last-name'];

$from = new SendGrid\Email($name, $email);
$to = new SendGrid\Email(null, "chungan@uchicago.edu");
$content = new SendGrid\Content("text/plain", $message);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);

if(($response->statusCode())=='200'||($response->statusCode())=='202'){
  $isSuccess = TRUE;
  $message = "Success! I will response to you soon!";
}else{
  $isSuccess = FALSE;
  $message = "Sorry it failed. Could you send it again using your own mail application, please?";
/*
  echo 'false';
  $myfile = fopen("send_grid.log", "a+") or die("Unable to open file!");
  $date = date("Y-m-d")."\n";
  fwrite($myfile, $txt);
  $txt = "Status code: ".$response->statusCode()."\n";
  fwrite($myfile, $txt);
  $txt = "Headers: ".$response->headers()."\n";
  fwrite($myfile, $txt);
  $txt = "Body: ".$response->headers()."\n";
  fwrite($myfile, $txt);
  fclose($myfile);
  echo 'end false';
*/
}

include 'index.php';

?> 
