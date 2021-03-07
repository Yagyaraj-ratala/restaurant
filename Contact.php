<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	  <link rel="stylesheet" type="text/css" href="css/portnav.css">
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
</head>
<body>
	<nav>
		<a href="index.php"><img src="images/logo.png" height="96" width="152"></a>
				<ul>
					<li><a href="index.php" onmouseover="onm.play()", onmousedown="onc.play()">Home</a></li>
					<li><a href="about.php" onmouseover="onm.play()", onmousedown="onc.play()">About</a></li>
					<li><a href="Sign.php" onmouseover="onm.play()", onmousedown="onc.play()">Register
					</a></li>
					<li><a href="admin.php" onmouseover="onm.play()", onmousedown="onc.play()">Admin
					</a></li>
				</ul>
			</nav>
<div class="contact-section">
	<h1>Contact Us</h1>
	<div class="border"></div>	
	<form class="contact-form" action="Contact-db.php" method="post">
	<input type="text" class="contact-form-text" name="fname"  placeholder="Your first Name" required="first name">	
	<input type="text" class="contact-form-text" name="lname"  placeholder="Your last name" required="last name">	
	<input type="email" class="contact-form-text" name="email"  placeholder="Your e-mail"  required ="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">	
	<input type="Phone" class="contact-form-text" name="pno" size="13" minlength="10" maxlength="12" placeholder="Your Phone Number" required>	
	<textarea class="contact-form-text" name="query" placeholder="Please Type Your Message here..." required=""></textarea>
	<input type="Submit" class="contact-form-btn" value="Send" name="send"></input>
	</form>
</div>
<script type="text/javascript" src="js/Beep.js"></script>  
</body>
</html>