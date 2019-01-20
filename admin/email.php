<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "noreply@thesmartinterviewer.epizy.com";
$mail->FromName = "The Smart Interview";

//To address and name
$mail->addAddress("hamzamirza347@gmail.com");

//Address to which recipient will reply
$mail->addReplyTo("noreply@thesmartinterviewer.epizy.com", "Reply");


//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Retrieve Your Password";
$mail->Body = "<i>Dear User! <br/> You have requested to retrieve your password on <br/> Your password is 123456</i>";
$mail->AltBody = "Your password is 456";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}