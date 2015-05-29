<?php 
      session_start();
	include("header.php");
	$pageTitle = 'Contact';
?>


<div id="heading"><a href="index.php"><img src="logo.jpg" width="165" height="83" id="logo" alt="LOGO"></a></div>
<a href="movies.php" div id="movies"> Movies </a>
	<a href="bookings.php" div id="bookings"> Bookings </a>


<div id="body"></div>
<div id="box1"></div>
<div id="Title">
<h1>Contact</h1>

<form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method="post">
<h2>Email:</h2>
<input type="email" name="email" required>
<h2>Select Enquiry:</h2>
<select name="subject">
<option value="gen">General Enquiry</option>
<option value="group">Group and Corporate Bookings</option>
<option value="sug">Suggestions &amp; Complaints</option>
</select>
<h2>Message:</h2>
<textarea id="message" class="input" name="message" rows="7" cols="30" required>
</textarea>
<br>
<input type="submit"></form>
</div>
<div id="footer"><a href="Contact.php" id="contact" name="contact">CONTACT US</a><h4>s3455338 Clinton Gilden <br> s3458281 Ahmed Musa</h4></div>
</body>
</html>