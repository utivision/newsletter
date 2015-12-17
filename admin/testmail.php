<?php
/**
 * Created by PhpStorm.
 * User: yildiz
 * Date: 16.12.15
 * Time: 23:04
 */


$sendmail = "From: sender@yourdomain.com\r\n";
$result =mail(
    'ihyildiz@me.com', // recipient email address
    'Email Subject', // email subject
    'Email Body', // email body
    $sendmail . "\r\n"// additional headers
);
var_dump($result);
/*
require_once 'swift/lib/swift_required.php';

// Create the mail transport configuration
//$transport = Swift_MailTransport::newInstance();
$transport = Swift_SmtpTransport::newInstance('localhost', 25);
$transport = Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
    ->setUsername('utivision@gmail.com')
    ->setPassword('ilhan$1938');


// Create the message
$message = Swift_Message::newInstance();
$message->setTo(array(
    "ihyildiz@me.com" => "Aurelio De Rosa",
    "ihyildiz@me.com" => "Audero"
));
$message->setSubject("This email is sent using Swift Mailer");
$message->setBody("You're our best client ever.");
$message->setFrom("utivision@gmail.com", "");

// Send the email
$mailer = Swift_Mailer::newInstance($transport);
echo '<pre>';
var_dump($mailer);
$mailer->send($message);
*/