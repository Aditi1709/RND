<?php 
 
require_once 'vendor/autoload.php';
require_once 'config/constants.php';
// Create the Transport
$transport = new Swift_SmtpTransport('smtp.example.org', 25);
  $transport=$transport->setUsername(EMAIL); //gmail adress
  $transport=$transport->setPassword(PASSWORD); //gmail password

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationEmail($userEmail , $token){

global $mailer;
$body = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Verify email</title>
  </head>
  <body>
  <div class="wrapper">
  <p>
  Thank you for signing up on our website. PLease click on the link below to verify your email
  </p>
  <a href = "https://localhost/public/index.php?token=' . $token .'">Verify your email adress</a>
  </body>
  </html>';

// Create a message
$message = new Swift_Message('Verify you email address');
$message=$message->setFrom(EMAIL);
$message=$message->setTo($userEmail);
$message=$message->setBody($body , 'text/html');

// Send the message
$result = $mailer->send($message);

}

?>