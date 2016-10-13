<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>J. Fang's Personal Webpage</title>
		<link rel="stylesheet" href="./css/styles.css">
		<link rel="icon" href="./images/pitt_logo.png" />
	</head>

	<body>

		<section id="home">
			<header class="header">
				<h1>Jennifer Fang</h1>
			  <nav>
			    <ul>
					  <li>
					    <a href="#home" id="inPage">Home</a>
					  </li>
						<li id="sep">
							&#124;
						</li>
					  <li>
					    <a href="#about" id="inPage">About</a>
					  </li>
						<li id="sep">
							&#124;
						</li>
						<li>
					    <a href="#currentProjects" id="inPage">Current Projects</a>
					  </li>
						<li id="sep">
							&#124;
						</li>
					  <li>
					    <a href="#links" id="inPage">Links</a>
					  </li>
						<li id="sep">
							&#124;
						</li>
						<li>
					    <a href="#contact" id="inPage">Contact</a>
					  </li>
					</ul>
			  </nav>
			</header>
		</section>

		<section id="about">
			<h2>About</h2>
			<img src="./images/me_with_robot_snake.jpg" alt="[picture of me with robot]" height="500px">
			<p>I am currently a computer engineering student scheduled to graduate in April 2017 and am open to pretty much anything.</p>
			<p>I actively participate in outreach events with the Society of Women Engineers (SWE), have mentored underclassmen,
				and am currently serving as the Vice President for Pitt's chapter of Eta Kappa Nu, the IEEE honor society.</p>
			<a href="./other_files/resume.pdf">Click here for my resume</a>
			<br>
		</section>

		<section id="currentProjects">
			<h2>Current Projects</h2>
			<p>This webpage for CS 1520 (Programming Languages for Web Applications)</p>
			<p>Hall sensor-stabilized magnetic levitation Lamp for ECE 1160 (Embedded Systems)<br></p>
		</section>

		<section id="links">
			<h2>Links</h2>
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
			<ul>
		</section>

		<section id="contact">
			<h2>Contact</h2>
			<p>
				You may email me at jmf133@pitt.edu or use the handy, dandy form below.
			</p>
			<form id="contactForm" action="mailto:jmf133@pitt.edu" method="post">
	      <fieldset class="short-text-input">
	        <div class="name">
	          Your name:
	          <input type="text" name="contact-name" id="contactNameInput"><br>
	        </div>
	        <div class="email">
	          Your email address:
	          <input type="text" name="email-address" id="emailAddressInput"><br>
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
	          <textarea cols=40% rows="10" name="messageArea" id="message"></textarea>
	        </div>
	      </fieldset>
				<div id="errorSection"></div>
	      <input type="submit" value="Submit!" onclick=validate() id="submitButton">
	      <br>
    	</form>
		</section>

		<noscript>Please do not block JavaScript in your browser.</noscript>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="./js/javascript.js"></script>

	</body>
			
</html>
