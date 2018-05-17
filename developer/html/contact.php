<?php
use PHPMailer\PHPMailer\PHPMailer;
require ('/home/karbon7/wpdenham.com/phpmailertesting/vendor/autoload.php');
//Create a new PHPMailer instance
//PHPMailer object

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$success = "";
$error = "";

$mail = new PHPMailer();

$mail->SMTPDebug = 0;
 
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
$mail->Password = 'Karbon2018!';

// Send the message 
if (!$mail->send())
{
    $error = "Hmm...something went wrong. Please try again.";
}else
{
    $success = "Message sent. Thank you for reaching out!";
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact - WP | DENHAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600|Rock+Salt" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="../css/devmain.css">
    <link rel="icon" href="../../assets/developer/favicon.gif" type="image/gif" sizes="32x32">
  </head>
  <body onload="expandForm()" >

      <!-- NAVIGATION -->
      	<header class="contactheader">
			<div class="container">

				<div class="logo">
					<a href="../../index.html"><i class="fas fa-code fa-2x arrows" aria-hidden="true"></i></a>
					<h1>WP <span>|</span> DENHAM</h1>
					<h2>front-end developer</h2>
				</div>
				<nav class="mainnav">
					<ul>
						<li>
							<a href="developer.php">Home</a>
							<a href="about.php">About</a>
							<a href="projects.html">Projects</a>
							<a class="active" href="contact.php">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
				<div class="divideline"></div>

			<div class="container" id="contactForm">
				<div class="contactmsg">
					<div class="contactmsgContent">
			      	<p>I am actively seeking a position that would utilize my unique capabilites and would be happy to learn about any available opportunity.</p>

			      	<div class="success"><?php if ($success != "") echo "$success"; else echo "$error"; ?></div>
			      	
			      		<div id="contactHidden" class="form">

							<div class="forminputs">
								<div class="formcontent">
			      				<h4>Direct:</h4>
			      				
								<a href="tel:708-926-5481">708.926.5481</a>
								<span>|</span>
								<a href="mailto: wpdenham@gmail.com">wpdenham@gmail.com</a>
								<hr>
								

								<h4>By Message:</h4>
								<form action="#contactForm" method="POST">
									<input name="name" type="text" placeholder="name:" required>
									<input name="email" type="email" placeholder="email:" required>
									<textarea name="message" name="message" id="" cols="75" rows="6" placeholder="message:"></textarea>
									<!-- <button class="sendbutton">SEND</button> -->

									<input type="submit" class="sendbutton" value="SEND">
								</form>
							</div>
							</div>
						</div>
					</div>
	</header>
      <!-- END NAVIGATION -->

      <!-- TECHNICAL SKILLS SECTION -->
	      	<section class="volunteersection">
	      		
			    <div class="container">
			    	

			    	<div class="volunteer animated fadeInUp">
			    		<h3>GET INVOLVED IN A GREAT CAUSE</h3>
			    		<div class="volunteercontent" >
				    		<p>For over 15 years, my family and I have been actively involved in the fight against Type 1 Juvenile Diabetes. Since 2002, we have contributed our time and efforts in support of the Juvenile Diabetes Research Foundation and their mission to make everyday life better for those with Type 1 Diabetes. The fight is not over yet, and there is always work to be done. If you or someone you know might be interested in helping, please feel free to visit the JDRF site below. It is an organization I strongly stand behind and one that offers me a chance to give back to the community both on a personal and professional level.</p>
			<a class="jdrfbutton" href="http://www.jdrf.org/illinois/" target="_blank">JDRF</a>
				      	</div>
			      	</div>
			</section>
			     
		</main>

      <!-- FOOTER -->
      		<footer>
      			<div class="container""></div>
				<ul>
					<li>
						<a href="developer.php">Home</a>
						<span>|</span>
						<a href="about.php">About</a>
						<span>|</span>
						<a href="projects.html">Projects</a>
						<span>|</span>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
				<p>copyright 2018 | WPDENHAM</p>
			</footer>
      <!-- END FOOTER -->

    <script type="text/javascript" src="../js/script.js"></script>
  </body>
</html>