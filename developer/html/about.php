<!--<?php
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
?>-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About - WP | DENHAM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600|Rock+Salt" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="../css/devmain.css">
  </head>
  <body onload="slideUp(), expandForm()">

      <!-- NAVIGATION -->
      	<header class="aboutheader">
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
							<a class="active" href="about.php">About</a>
							<a href="projects.html">Projects</a>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
				<div class="divideline"></div>

			<div class="container">
				<div class="aboutmsg">
					<div class="aboutmsgImg">
						<img class="aboutmsgImg animated fadeInLeftBig" src="../../assets/developer/contactme1.png" alt="">
					</div>
					<div class="aboutmsgContent">
						<p class=" animated fadeInRightBig">
							Welcome! Thanks for stopping in. Most know me as Bill, and I am a Chicago based Front-End Developer with a strong passion for bringing ideas to life through the powerful combination of code and design.  As a self-taught developer, I have come to appreciate just how complex this environment can be and I thrive on being able to apply my prior design knowledge to a new field in an effort to truly bring projects from concept to completion. 
						</p>
					</div>
				</div>
			</div>
	</header>
      <!-- END NAVIGATION -->

      <!-- TECHNICAL SKILLS SECTION -->
	      	<section class="techskills">
	      		
			    <div class="container">
			    	<h3>Technical Skills</h3>

			    	<div class="skills">
			    		<div class="skillimg animated fadeInLeft">
				    		<img src="../../assets/developer/herobackground11.jpg" alt="">
			    		</div>
			    		<div class="skillcontent">
				    		<h4>Development</h4>
				    		<hr>
				    		<img src="../../assets/developer/html.png" alt="">
				    		<img src="../../assets/developer/css.png" alt="">
				    		<img src="../../assets/developer/js.png" alt="">
				    		<img src="../../assets/developer/bootstrap.png" alt="">
					      	<p>Front-End Development is a relatively new skill and one that I am very passionate about continuing to learn and explore. I am currently comfortable with <span>HTML5</span>, <span>CSS3</span>, <span>JS</span> and <span>Bootstrap 3/4</span> and have recently started learning React.JS. Throughout the learning process, I have also gained a bit of experience with version control and back-end development using technologies such as <span>Node.JS</span>, <span>NPM</span>, <span>MongoDB</span>, <span>MySQL</span>, <span>GIT/GITHub</span> and the <span>Command Line</span>, to help establish a well rounded approach to the development cycle.</p>
				      	</div>
			      	</div>

			     <div class="skills">
			    		
			    		<div class="skillcontent">
				    		<h4>Design</h4>
				    		<hr>
				    		<img src="../../assets/developer/pscc.png" alt="">
				    		<img src="../../assets/developer/illustrator.png" alt="">
				    		<img src="../../assets/developer/xd.png" alt="">
				    		<img src="../../assets/developer/sketch.png" alt="">
					      	<p>For nearly a decade, I have crafted and designed a variety of projects using the latest technology including <span>Photoshop</span>, <span>Illustrator</span>, <span>XD</span>, <span>Sketch</span>, <span>InVision</span>, <span>Solidworks</span>, <span>KeyShot</span> and more. From corporate branding to prototyping, animation and everything in between; being able to adapt, learn and flex according to the projects needs is an essential skill. </p>

					      	<button><a href="../../designer/html/portfolio.html">Design Portfolio</a></button>
				      	</div>
				      	<div class="skillimg animated fadeInRight">
				    		<img src="../../assets/developer/herobackground10.jpg" alt="">
			    		</div>
			      	</div>
			    </div>
	      	
      <!-- END TECHNICAL SKILLS SECTION -->

      <!-- COMMENT SECTION 1 -->
      		<!-- <section class="feedback levelOne">
		      	<div class="container">
			      	<blockquote>&ldquo;In a business where first impressions literally make you or break you, having Bill on your side is most beneficial!&rdquo;</blockquote>
			      	<h4>- Jeff C.</h4>
			    </div>
		    </section> -->
      <!-- END COMMENT SECTION 1 -->

      <!-- EDUCATION SECTION -->
      		<hr class="educationhr">
	      	<section class="educationsection anim animated ">
			    <div class="container">
			    	<h3>Education</h3>
			      	<div class="education">
			      		
						<div class="edcontent">

							<img src="../../assets/developer/selftaught.png" alt="">
							<h5>Self Taught</h5>
			      			<p>As a self-taught developer, I am consistently striving to increase my knowledge by any means possible. <!-- Thankfully, in today's world there are plenty of resources available to provide tutorials, support, documentation and community response at a rapid rate.  -->I am currently studying React.JS for increased effeciency and capabilities in relation to front-end develeopment. From here I plan to expand into either Angular.JS or Vue.JS, while continuing to remember and maintain the core skillset behind any great web experience.</p>
			      		</div>

			      		<div class="edcontent">
			      			<img src="../../assets/developer/chicago.png" alt="">
			      			<h5>DESIGNATION</h5>
			      			<p>This boot-camp program was designed to introduce the core concepts of UX Design including ideation, exploration, conceptualization, testing, development and implementation. Core tasks included initial research and competitive analysis, SWAT analysis, user interviews, persona development, ideation, wire framing, prototyping and user testing in relation to mobile and web based applications and sites.</p>
						</div>

						<div class="edcontent">
							<img src="../../assets/developer/college.png" alt="">
							<h5>B.A. Graphic Design</h5>
			      			<p>With a concentration in Computer Graphic Design, this Fine Arts Degree program focused on core fine arts topics in relation to graphic design. These included typography, web design, publication design, project management, layout and 3D modeling. Senior year culminated in the completion of a personal portfolio and an in house gallery on display for staff, students and the public eye.</p>
						</div>
			      	</div>
			    </div>
	      	</section>
	      	</section>
      <!-- END EDUCATION SECTION -->

      <!-- CONTACT SECTION 2 -->
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
									<!-- <button class="sendbutton">SEND</button> -->

									<input type="submit" class="sendbutton" value="SEND">
									
								</form>
							</div>
							</div>
						</div>
					
			    </div>
		    </section>
      <!-- END CONTACT SECTION 2 -->

      <!-- INTERESTS SECTION -->
	      	<section class="passionsection" >
			    <div class="container">
			    	<div class="anim animated ">
			    	<h3>Passions and Interests</h3>
			    	<div class="passions">
				    	<div class="passion">
					    	<img src="../../assets/developer/gearshobby.png" alt="">
					      	<hr>
					      		<p>I've always had an interest in getting down to the details and origins of how things work, how things function and this passion spreads to all sorts of areas, including web development. When your mind wanders in this direction, ideas often times become plentiful even in the simplest of forms. </p>
					      
				      	</div>
				      	<div class="passion">
					      	<img src="../../assets/developer/lakehobby.png" alt="">
					      	<hr>
					      		<p>When I'm not developing projects, you can usually find me working in the garage or checking out a local car event with friends. When the nice weather hits, you will find me at the lake with family, or enjoying late night fires amongst the depths of space letting the mind breathe.</p>
					    </div>
				      	<div class="passion">
					      	<img src="../../assets/developer/simplehobby.png" alt="">
					      	<hr>
					      		<p>Aside from family, friends and the origins of tools and technology, I am a pretty simple person. Most who know me will say that I am a patient individual who likes to keep things simple and neutral. I take pride in giving back any way I can and always try and see the positive side to any situation. </p>
					    </div>
				      	</div>
				    </div>
			    </div>
	      	</section>
      <!-- END INTERESTS SECTION -->

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