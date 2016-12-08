<!doctype html>
<html lang="en">

	<head>

		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- to render the webpage in the highest mode available, for older IE browsers -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- for proper rendering and touch-zooming on mobile devices -->
    <meta name="author" content="J.M. Fang">

    <title>J.M. Fang's Personal Webpage</title>

		<link rel="icon" href="./images/pitt_logo.png" /> <!-- favicon -->

		<link rel="stylesheet" href="./css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand inPagge" href="#home">J.M. Fang</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#about" class="in-page">About</a></li>
						<li><a href="#currentProjects" class="in-page">Current Projects</a></li>
						<li><a href="#links" class="in-page">Links</a></li>
						<li><a href="#madLibs" class="in-page">Mad Libs</a></li>
						<li><a href="#contact" class="in-page">Contact</a></li>
					</ul>
				</div> <!-- div class="collapse navbar-collapse" id="myNavbar" -->
			</div> <!-- div class="container-fluid" -->
		</nav>

		<div class="jumbotron bg-2 text-center" id="home">
			<div id="openingSection">
				<h1 class="webpage-header">J.M. Fang<br></h1>
				<h3>My personal webpage</h3><br><br>
				<h1 id="arrow"><a href="#about" class="in-page">&seswar;</a></h1>
				<h3 class="white-text" id="enter">Enter</h3>
			</div>
		</div>

		<div class="container" id="about">
			<h2>About</h2>
			<div class="row">
				<div class="col-sm-4">
  				<img class="img-responsive" src="./images/me_with_robot_snake.jpg" alt="[picture of me with robot]">
				</div>
				<div class="col-sm-8">
	  			<p><br>I am currently a computer engineering student scheduled to graduate in April 2017 and am open to pretty much anything.</p>
	  			<p>I actively participate in outreach events with the Society of Women Engineers (SWE), have mentored underclassmen,
	  				and am currently serving as the Vice President for Pitt's chapter of Eta Kappa Nu, the IEEE honor society.</p>
	  			<a href="./other_files/resume.pdf" target="_blank">Click here for my resume</a>
				</div>
			</div>
		</div> <!--div class="container" id="about"-->

		<div class="container-fluid bg-2" id="saganQuote">
			<blockquote class="blockquote-reverse">
				<p><i>"For me, the most ironic token of [the first human moon landing] is the plaque signed by President Richard M. Nixon that Apollo 11 took to the moon.  It reads, 'We came in peace for all Mankind.'  As the United States was dropping seven and a half megatons of conventional explosives on small nations in Southeast Asia, we congratulated ourselves on our humanity.  We would harm no one on a lifeless rock."</i></p>
				<footer>Carl Sagan</footer>
			</blockquote>
		</div>

		<div class="container" id="currentProjects">
			<h2>Current Projects</h2>
			<p>This webpage for CS 1520 (Programming Languages for Web Applications)</p>
			<p>Hall sensor-stabilized magnetic levitation Lamp for ECE 1160 (Embedded Systems)<br></p>
		</div> <!--div class="container" id="currentProjects"-->

		<div class="container" id="links">
			<h2>Links</h2>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">My Professional Social Media Profiles</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
							<ul>
			  				<li>
			  					<a href="https://www.linkedin.com/in/jennifer-fang-8852b560" target="_blank">LinkedIn</a>
			  				</li>
			  				<li>
			  					<a href="https://github.com/JFang1" target="_blank">Github</a>
			  				</li>
			  				<li>
			  					<a href="https://plus.google.com/u/0/114597235699348422881" target="_blank">Google Plus</a>
			  				</li>
			  			</ul>
						</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Explore the World . . . on Your Computer</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
							<ul>
								<li>
									<a href="https://www.youtube.com/watch?v=TWHNr0BrNgo" target="_blank">The "Work Hard Play Hard" Side of Pittsburgh</a>
								</li>
			  				<li>
			  					<a href="http://www.airpano.com/" target="_blank">360&deg; Virtual Tours Around the World</a>
			  				</li>
			  				<li>
			  					<a href="http://www.vatican.va/various/cappelle/sistina_vr/index.html" target="_blank">Every Angle of the Interior of the Sistine Chapel</a>
			  				</li>
			  				<li>
			  					<a href="http://www.popsci.com/article/technology/nerdiest-places-explore-google-street-view?image=0" target="_blank">So-called "Nerdy" Places to Explore on Google Street View</a>
			  				</li>
			  			</ul>
						</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Ambient Sounds</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
							<ul>
			  				<li>
			  					<a href="http://youarelistening.to/byo?sc=https%3A%2F%2Fsoundcloud.com%2Fcaulkhead%2Fsea-witches&rr=277005256&v=&img=http%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fd%2Fd4%2FChych_Pittsburgh_Skyline_Night.jpg" target="_blank">You Are Listening To: Pittsburgh</a>
			  				</li>
			  				<li>
			  					<a href="https://rainymood.com/" target="_blank">Rainy Mood: The Original 30-Minute Thunderstorm Loop</a>
			  				</li>
			  				<li>
			  					<a href="http://got.ambient-mixer.com/" target="_blank">Study in Westeros!</a>
			  				</li>
			  			</ul>
          	</div>
        	</div>
      	</div>
			</div> <!--div class="panel-group" id="accordion"-->
		</div> <!--div class="container" id="links"-->

		<div class="container" id="madLibs">
			<h2>Mad Libs</h2>
			<p>Fill in each of the spaces below. &#9998;</p>
			<div class="col-sm-6">
				<form id="madLibsForm" action="#madLibs" method="POST">
					A noun:
					<input type="text" name="first-noun" id="firstNoun" class="black-text"><br>
					Another noun:
					<input type="text" name="second-noun" id="secondNoun" class="black-text"><br>
					Yet another noun:
					<input type="text" name="third-noun" id="thirdNoun" class="black-text"><br>
					A different noun:
					<input type="text" name="fourth-noun" id="fourthNoun" class="black-text"><br>
					An adjective:
					<input type="text" name="adjective" id="adjective" class="black-text"><br>
					<br><br>
					<input type="submit" value="Show MadLib!" id="madLibButton" class="black-text"><br>
				</form>
			</div>
			<div class="col-sm-6"  id="hideAtFirst" class="white-text">
				<?php
					error_reporting(0);
					$noun1 = $_REQUEST['first-noun'];
					$noun2 = $_REQUEST['second-noun'];
					$noun3 = $_REQUEST['third-noun'];
					$noun4 = $_REQUEST['fourth-noun'];
					$adjective5 = $_REQUEST['adjective'];
					if (empty($noun1) || empty($noun2) || empty($noun3) || empty($noun4) || empty($adjective5)) {
						echo "Please fill in all the blanks!";
					}
					else { // else, everything is filled in
						$text = file("other_files/madLibs.txt");
						foreach ($text as $line) {
							// trim off newline
							$line = rtrim($line);
							// change the variables in the .txt to their proper values
							$line = preg_replace("/NOUN1/i", $noun1, $line);
							$line = preg_replace("/NOUN2/i", $noun2, $line);
							$line = preg_replace("/NOUN3/i", $noun3, $line);
							$line = preg_replace("/NOUN4/i", $noun4, $line);
							$line = preg_replace("/ADJECTIVE5/i", $adjective5, $line);
							// print out the line
							echo $line;
						}
					} // end else condition
				?>
			</div>
		</div> <!--div class="container" id="mad-libs"-->

		<div class="container" action="#contact" id="contact">
			<h2>Contact</h2>
			<p>&#9993; You may email me at <a href="mailto:jmf133@pitt.edu">jmf133@pitt.edu</a> or use the handy, dandy form below.</p>
			<form id="contactForm" action="./php/script.php" method="POST">
	      <fieldset class="short-text-input">
	        <div class="name">
	          Your name:
	          <input type="text" name="contact-name" id="contactNameInput" class="black-text"><br>
	        </div>
	        <div class="email">
	          Your email address:
	          <input type="text" name="email-address" id="emailAddressInput" class="black-text"><br>
	        </div>
	      </fieldset>
				<fieldset class="radio-options">
					<div class="subject">
						Subject of this message: <br>
						<input type="radio" name="message-subject" value="website"> Website (questions, comments)<br>
						<input type="radio" name="message-subject" value="academics"> Academics (class projects, homework)<br>
						<input type="radio" name="message-subject" value="employment"> Employment<br>
						<input type="radio" name="message-subject" value="other"> Other<br>
					</div>
				</fieldset>
	      <fieldset class="text-holder">
	        <div class="the-message">
	          Message:<br>
	          <textarea cols=40% rows="10" name="message-area" id="message" class="black-text"></textarea>
	        </div>
	      </fieldset>
				<div id="errorSection"></div>
	      <input type="submit" value="Submit!" id="submitButton">
    	</form>
		</div> <!--div class="container" id="contact"-->

		<footer class="container-fluid bg-footer text-center">
			<p>&copy; 2016 J.M. Fang</p>
		</footer>

		<noscript>Please do not block JavaScript in your browser.</noscript>

    <!-- Bootstrap's jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- my JavaScript -->
		<script src="./js/javascript.js"></script>
    <!-- Bootstrap's latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>

</html>
