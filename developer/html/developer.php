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
    <title>Developer - WP | DENHAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600|Rock+Salt|" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="../css/devmain.css">
    <link rel="icon" href="../../assets/developer/favicon.gif" type="image/gif" sizes="32x32">
  </head>
  <body onload="expandForm()">

      <!-- NAVIGATION -->
      	<header class="indexheader">
			<div class="container">
				<div class="logo">
					<a href="../../index.html"><i class="fas fa-code fa-2x arrows" aria-hidden="true"></i></a>
					<h1>WP <span>|</span> DENHAM</h1>
					<h2>front-end developer</h2>
				</div>
				<nav class="mainnav">
					<ul>
						<li>
							<a class="active" href="developer.php">Home</a>
							<a href="about.php">About</a>
							<a href="projects.html">Projects</a>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
				<div class="divideline"></div>
			<div class="container">	
				<div class="quote animated fadeInUp">
					<blockquote>Technology, like art, is a soaring exercise of the human imagination.</blockquote>
					<h4>-D. Bell</h4>
					<img id="scrollIcon" class="scrollicon animated infinite bounce" src="../../assets/developer/scrollicon4.png" alt="">
			</div>
	</header>
      <!-- END NAVIGATION -->

      <!-- PROJECTS INTRO -->
	      	<section class="projects">
			    <div class="container">
			    	<h3>Latest Projects</h3>
			      	<div class="cardgrid">
			      		<div class="card">
							<a href="http://arconstructionil.com/" target="_blank"><img src="../../assets/developer/project1.png" alt=""></a>
							<h4>AR Construction</h4>
							<p>Current State: <span><a href="http://arconstructionil.com/" target="_blank">LIVE</a></span></p>
							
							<a href="https://github.com/wpdenham/ARConstruction18" target="_blank" class="sourceCode"><i class="fab fa-github fa-1x icon" aria-hidden="true"></i>Source Code</a>
			      		</div>
			      		<div class="card">
			      			<img src="../../assets/developer/indev.png" alt="">
							<h4>BlackOps Motorwerx</h4>
							<p>Current State: <span>IN DEVELOPMENT</span></p>
							
							<a href="https://github.com/wpdenham/ARPrinting2018" target="_blank" class="sourceCode"><i class="fab fa-github fa-1x icon" aria-hidden="true"></i>Source Code</a>
			      		</div>
			      		<div class="card">
			      			<a href="http://arprinting.net/" target="_blank"><img src="../../assets/developer/project2.png" alt=""></a>
							<h4>AR Printing</h4>
							<p>Current State: <span><a href="http://arprinting.net/" target="_blank">LIVE</a></span></p>
							
							<a href="https://github.com/wpdenham/ARPrinting2018" target="_blank" class="sourceCode"><i class="fab fa-github fa-1x icon" aria-hidden="true"></i>Source Code</a>
			      		</div>
			      	</div>
			      	<button><a href="projects.html" class="viewMore">View More</a></button>
			    </div>
	      	</section>
      <!-- END PROJECTS INTRO -->

      <!-- COMMENT SECTION 1 -->
      		<section class="feedback levelTwo">
		      	<div class="container">
			      	<blockquote>&ldquo;In a business where first impressions literally make you or break you, having Bill on your side is most beneficial!&rdquo;</blockquote>
			      	<h4>- Jeff C.</h4>
			    </div>
		    </section>
      <!-- END COMMENT SECTION 1 -->

      <!-- ABOUT INTRO -->
      	<main>
      		<section class="aboutmain">
      			<div class="container">
      			<div class="about">
      				<div class="aboutimg">
			      		<img src="../../assets/developer/developeraboutimg.png" alt="">
			      		
	      			</div>
	      			<div class="content">
		      			<h3>At A Glance</h3>
		      			<p>As a multi-disciplinary developer and designer, it is essential to stay on the fore-front of technology and trends in order to provide the most realistic and creative solution to any challenge set. By harnessing the power of code and design, flat sketches become interactive prototypes, wire-frames and mock-ups become live sites and the development cycle becomes more fulfilling when projects can go from concept to creation. To make these experiences possible, a well-crafted set of skills is required: </p>
		      			<ul>
		      				<h5>Front-End Developer</h5>
		      				<li>HTML5</li>
		      				<li>CSS3</li>
		      				<li>Javascript</li>
		      				<li>React.JS</li>
		      			</ul>
		      			<ul>
		      				<h5>Graphic Designer</h5>
		      				<li>Adobe Photoshop</li>
		      				<li>Adobe Illustrator</li>
		      				<li>Adobe XD</li>
		      				<li>Sketch App</li>
		      			</ul>
		      			<button><a href="about.php">View More</a></button>
		      			<button><a href="#">Resume PDF</a></button>
		      			
	      			</div>
	      		</div>
	      		</div>
      		</section>
      <!-- END ABOUT INTRO -->

      <!-- COMMENT SECTION 2 -->
      		<section class="contact levelTwo" id="contactForm">
	      	    <div class="container">
			      	<h3>I am actively seeking a position that would utilize my unique capabilites and would be happy to learn about any available opportunity.</h3>

					<div class="success"><?php if ($success != "") echo "$success"; else echo "$error"; ?></div>

			      	<button id="letsTalk"><a class="viewMore">Let's Talk</a></button>
			      	
			      		<div id="contactHidden" class="form formhidden">

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

									<input type="submit" class="sendbutton" value="SEND">
								</form>
							</div>
							</div>
						</div>
					
			    </div>
		    </section>
      <!-- END COMMENT SECTION 2 -->

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