<?php
use PHPMailer\PHPMailer\PHPMailer;
require ('/home/karbon7/wpdenham.com/phpmailertesting/vendor/autoload.php');
//Create a new PHPMailer instance
//PHPMailer object



$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$success = "";

$mail = new PHPMailer();

$mail->SMTPDebug = 4;
 
// Sender (name is optional)
$mail->setFrom($email, $name);
 
// Recipient (name is optional)
$mail->addAddress('bill@wpdenham.com');
$mail->AddCC('bill@karbonkreationz.com');
 
// Subject 
$mail->Subject = 'New WPDenham Contact Form Submission';


// Send message as HTML
$mail->isHTML(TRUE);

$mail->Body = $message;

// Plain text alternative
$mail->AltBody = $message;


// Use a custom SMTP server
$mail->isSMTP();
 
// SMTP host
$mail->Host = 'secure224.inmotionhosting.com';
 
// SMTP TCP port
$mail->Port = 25;
 
// Use TSL secure connection
$mail->SMTPSecure = 'tls';

 
// Enable authentication
$mail->SMTPAuth = TRUE;
 
// SMTP username
$mail->Username = 'contact@wpdenham.com';
 
// SMTP password
$mail->Password = 'contact123';

// Send the message 
if (!$mail->send())
{
    echo 
    // "Error: " . $mail->ErrorInfo;
}
else
{
    echo $success = "Message sent. Thank you for reaching out!";
}

?>