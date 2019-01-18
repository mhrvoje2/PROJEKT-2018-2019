<?php 
print '
<!DOCTYPE html>
<html>
	<head>
		
		
		<link rel="stylesheet" href="style.css">
		
		
		<title>Projekt zadatak 7</title>
	</head>
<body>
	<header>
	 
		
	</header>
	<main>
		<h1>Contact Form</h1>
		<div id="contact">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.9194493104615!2d15.872068815114833!3d45.81287157910657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d1a11a964279%3A0x357537a5e7a58193!2sPohorska+ul.%2C+10090%2C+Zagreb!5e0!3m2!1shr!2shr!4v1543774234948" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>" allowfullscreen></iframe>
			<form action="http://work2.eburza.hr/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
				<label for="fname">First Name *</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

				<label for="lname">Last Name *</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
				
				<label for="lname">Your E-mail *</label>
				<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

				<label for="country">Country</label>
				<select id="country" name="country">
				  <option value="">Please select</option>
				  <option value="BE">Belgium</option>
				  <option value="HR" selected>Croatia</option>
				  <option value="LU">Luxembourg</option>
				  <option value="HU">Hungary</option>
				</select>

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">
			</form>
		</div>
	</main>
	
</body>
</html>';
?>