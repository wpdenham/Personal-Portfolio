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
$mail->Password = 'contact123';

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


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WP | DENHAM  Graphic Designer</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600|Rock+Salt" rel="stylesheet">
	<link rel="stylesheet" href="../css/main.css" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
</head>
<body>
	
	<!-- BEGIN HEADER/NAV -->
	
	<header class="indexheader">
		<div class="container">
		<div class="logo">
			<a href="../../index.html"><i class="fa fas fa-arrows-alt fa-3x arrows" aria-hidden="true"></i></a>
			<h1>WP <span>|</span> DENHAM</h1>
			<h3>graphic designer</h3>
		</div>
		<nav class="mainnav">
			<ul>
				<li>
					<a class="active" href="designer.php">Home</a>
					<a href="about.html">About</a>
					<a href="portfolio.html">Portfolio</a>
					<!-- <a href="services.html">Services</a> -->
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="hamnav">
			<div class="bar bar1"></div>
			<div class="bar bar2"></div>
			<div class="bar bar3"></div>
		</div>
			<div class="divideline"></div>
	<div class="container">	
			<div class="quote animated fadeInUp">
				<blockquote>Creativity is the power to connect <br> the seemingly unconnected.</blockquote>
				<h4>-W. Plomer</h4>
			</div>
		</div>
	</header>
		<!-- END HEADER/NAV -->

		<!-- BEGIN 3 CARD QUALITY SECTION -->
		<section class="qualities">
			<div class="container">
				<div class="qualitygrid animated fadeInUp">
					<div class="maincard">
						<div class="bluesky">
							<i class="fa fa-cloud fa-5x icon" aria-hidden="true"></i>
							<h4>BLUE SKY</h4>
							<p>Blue Sky Thinking allows designers, developers and creators of all types to think freely and expand beyond the borders of the traditional "box". As a designer, this provides an opportunity to experiment outside my traditional scope, often resulting in unique solutions to complex problems, eye-catching works of art and a positive impact on the community.</p>
						</div>
					</div>
					<div class="maincard">
						<div class="creative">
							<i class="fa fa-paint-brush fa-5x icon" aria-hidden="true"></i>
							<h4>CREATIVE</h4>
							<p>At the core of creativity is the ability to switch sides in our brain and explore or create from a different perspective. It's an innate power that every human has and allows professional designers and creators to craft their own style, their own "trademark" so to speak. Over the last decade, I have learned to harness this ability and recognize how, when, and where I can solve problems and create meaningful pieces.</p>
						</div>
					</div>
					<div class="maincard">
						<div class="teammember">
							<i class="fa fa-users fa-5x icon" aria-hidden="true"></i>
							<h4>TEAM MEMBER</h4>
							<p>I have been fortunate enough to work in large teams, small groups and independently on a wide variety of projects with great success. The combined dynamics and effort involved in team work is where real problems are solved and is something I find very rewarding and energizing in my day to day work.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END 3 CARD QUALITY SECTION -->

		<!-- BEGIN RECENT PROJECTS SECTION -->
		<section class="recentproj">
			<div class="container">
				<h3>RECENT PROJECTS</h3>
				<div class="portfoliohome">
				
					<div class="portgridhome">
						<!-- ITEM 1 BREAK -->
						<div class="projitemout animated bounceInLeft">
							<img src="../../assets/designer/portfolio/website.png" alt="">
							<a onclick="isVisible('proj1')">
							<div class="projitemin">
								<h5>RUBINO'S IMPORTS</h5>
								<p>Website Design</p>
							</div>
							</a>
						</div>
						
							<div class="zoomcontainer" id="proj1">
								
								
								<div class="modal">
									<div class="imgcol">
										<img src="../../assets/designer/portfolio/website.png" alt="" >
									</div>
									<div class="contentcol">
										<span onclick="blankOpacity('proj1')" class="close">&times;</span>
										<h3>RUBINO'S IMPORTS</h3>
										<h4>Website Design</h4>
										<div class="divideline"></div>
										<p>A refresh of the current Rubino's Italian Imports website is in the beginning stages of development. This new image will help the brand grow comfortably into the latest design and web trends, while maintaining important aspects of their history. Check back soon for more progress updates.</p>
										<span class="process">Process: Illustrator, Photoshop, Front End Development (HTML, CSS, Javascript)</span>
									</div>
								</div>
								
							</div>

						<!-- ITEM 1 END BREAK -->
						<!-- ITEM 2 BREAK -->
						<div class="projitemout animated bounceInDown">
							<img src="../../assets/designer/portfolio/blackops.png" alt="">
							<a onclick="isVisible('proj2')">
							<div class="projitemin">
								<h5>BLACKOPS</h5>
								<p>Corporate Branding</p>
							</div>
							</a>
						</div>
							<div class="zoomcontainer" id="proj2">
								
								
								<div class="modal">
									<div class="imgcol">
										<img src="../../assets/designer/portfolio/blackops.png" alt="" >
									</div>
									<div class="contentcol">
										<span onclick="blankOpacity('proj2')" class="close">&times;</span>
										<h3>BLACKOPS</h3>
										<h4>Corporate Branding</h4>
										<div class="divideline"></div>
										<p>A complete identity plan was needed to help create a strong and visually striking brand for BlackOps Motorwerx. Together we were able to create a full stationary package that felt great in the hand and communicated their message effectively.</p>
										<span class="process">Process: Illustrator, Photoshop</span>
									</div>
								</div>
							</div>
						<!-- ITEM 2 END BREAK -->
						<!-- ITEM 3 BREAK -->
						<div class="projitemout animated bounceInRight">
							<img src="../../assets/designer/portfolio/nighthawk.png" alt="">
							<a onclick="isVisible('proj3')">
							<div class="projitemin">
								<h5>NIGHTHAWK</h5>
								<p>3D Emblem Package</p>
							</div>
							</a>
						</div>
							<div class="zoomcontainer" id="proj3">
								
								
								<div class="modal">
									<div class="imgcol">
										<img src="../../assets/designer/portfolio/nighthawk.png" alt="" >
									</div>
									<div class="contentcol">
										<span onclick="blankOpacity('proj3')" class="close">&times;</span>
										<h3>NIGHTHAWK</h3>
										<h4>3D Emblem Package</h4>
										<div class="divideline"></div>
										<p>This client was interested in incorporating a bit of extra flair to their vehicle up-fitting process. With a limited run of 100 pieces, this vacuumed formed emblem helped to create a truly unique vehicle package. </p>
										<span class="process">Process: Illustrator, Solidworks, KeyShot, Photoshop</span>
									</div>
								</div>
							</div>
						<!-- ITEM 3 END BREAK -->
						<!-- ITEM 4 BREAK -->
						<div class="projitemout animated bounceInLeft">
							<img src="../../assets/designer/portfolio/wrapbrothersa.png" alt="">
							<a onclick="isVisible('proj4')">
							<div class="projitemin">
								<h5>WRAP BROTHERS</h5>
								<p>Apparel Design</p>
							</div>
							</a>
						</div>
							<div class="zoomcontainer" id="proj4">
								
								
								<div class="modal">
									<div class="imgcol">
										<img src="../../assets/designer/portfolio/wrapbrothersa.png" alt="" >
									</div>
									<div class="contentcol">
										<span onclick="blankOpacity('proj4')" class="close">&times;</span>
										<h3>WRAP BROTHERS</h3>
										<h4>Employee T-Shirt</h4>
										<div class="divideline"></div>
										<p>This project combined a bit of logo design with a bit of corporate apparel design. What started from a simple idea, quickly turned into a full-fledged image to help represent Wrap Brothers at major events, installations and trade shows.</p>
										<span class="process">Process: Illustrator, Photoshop</span>
									</div>
								</div>
							</div>
						<!-- ITEM 4 END BREAK -->
						<!-- ITEM 5 BREAK -->
						<div class="projitemout animated bounceInUp">
							<img src="../../assets/designer/portfolio/blackbirdwide.png" alt="">
							<a onclick="isVisible('proj5')">
							<div class="projitemin">
								<h5>BLACKBIRD</h5>
								<p>Vehicle Rendering</p>
							</div>
							</a>
						</div>
							<div class="zoomcontainer" id="proj5">
								
								
								<div class="modal">
									<div class="imgcol">
										<img src="../../assets/designer/portfolio/blackbirdwide.png" alt="" >
									</div>
									<div class="contentcol">
										<span onclick="blankOpacity('proj5')" class="close">&times;</span>
										<h3>BLACKBIRD</h3>
										<h4>2016 JEEP SRT8</h4>
										<div class="divideline"></div>
										<p>Inspired by the famous SR-71 Blackbird aircraft, this JEEP owner wanted to carry the theme through to his personal vehicle. Red accent and trim pieces highlight areas throughout the airbrushed body panels and custom graphics. Dark, fast, and powerful...just like the SR-71. </p>
										<span class="process">Process: Illustrator, Photoshop</span>
									</div>
								</div>
							</div>
						<!-- ITEM 5 END BREAK -->
						<!-- ITEM 6 BREAK -->
						<div class="projitemout animated bounceInRight">
							<img src="../../assets/designer/portfolio/nighthawka.png" alt="">
							<a onclick="isVisible('proj6')">
							<div class="projitemin">
								<h5>PROVOCATION</h5>
								<p>2015 Kia Cadenza</p>
							</div>
							</a>
						</div>
							<div class="zoomcontainer" id="proj6">
								
								
								<div class="modal">
									<div class="imgcol">
										<video src="../images/test.mp4" alt="" width="100%" autoplay="true"></video>
									</div>
									<div class="contentcol">
										<span onclick="blankOpacity('proj6')" class="close">&times;</span>
										<h3>PROVOCATION</h3>
										<h4>2015 Kia Cadenza</h4>
										<div class="divideline"></div>
										<p>Premium vehicle rendering designed for a project at the 2015 SEMA Show. This rendering was created entirely in Photoshop.</p>
										<span class="process">Process: Illustrator, Photoshop</span>
									</div>
								</div>
							</div>
						<!-- ITEM 6 END BREAK -->
						
					</div>
				
				<button class="viewportfolio"><a href="portfolio.html">VIEW PORTFOLIO</a></button>
			</div>
		</div>
		</section>
		<!-- BEGIN RECENT PROJECTS SECTION -->

		<!-- BEGIN CONTACT ME SECTION -->
		<section class="indexcontactme" id="contactForm">
			<div class="container">
				<div class="indexcontactgrid">
					<div class="col1">
						<div class="headshot">
							<img src="../../assets/designer/general/contactme1.png" alt="#">
						</div>
					</div>
					<div class="col2">
						<h5 class="indexh5">I am actively seeking a position that would utilize my unique capabilites and would be happy to learn about any available opportunity.</h5>

						<div class="success"><?php if ($success != "") echo "$success"; else echo "$error"; ?></div>

						<p class="indexp">wpdenham@gmail.com | 708.926.5481</p>
						<form action="#contactForm" method="POST">
							<input name="name" type="text" placeholder="name:" required>
							<input name="email" type="email" placeholder="email:" required>
							<textarea name="message" name="message" id="" cols="75" rows="6" placeholder="message:"></textarea>
							<!-- <button class="sendbutton">SEND</button> -->

							<input type="submit" class="sendbutton" value="SEND">
						</form>
					</div>
				</div>
		</section>
	
	<!-- BEGIN CONTACT ME SECTION -->

	<!-- BEGIN FOOTER -->
	<footer>
		<ul>
			<li>
				<a href="designer.php">Home</a>
				<span>|</span>
				<a href="about.html">About</a>
				<span>|</span>
				<a href="portfolio.html">Portfolio</a>
				<span>|</span><!-- 
				<a href="services.html">Services</a>
				<span>|</span> -->
				<a href="contact.php">Contact</a>
			</li>
		</ul>
		<p>copyright 2018 | WPDENHAM</p>
	</footer>
	<!-- END FOOTER -->
<script src="../js/modal.js"></script>
	
</body>
</html>