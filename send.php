<?php
/**
 * Created by PhpStorm.
 * User: BearShake
 * Date: 20.03.2018
 * Time: 17:39
 */
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

//Create a new PHPMailer instance


$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 4;
//Set the hostname of the mail server
$mail->Host = gethostbyname('tls://smtp.gmail.com');
// use
// $--mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "antiki455@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Samsung56666228";
//Set who the message is to be sent from
$mail->setFrom('antiki455@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('antiki455@inbox.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('antiki455@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

//Replace the plain text body with one created manually
$mail->Body = 'This is a plain-text message body';
//Attach an image file
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}