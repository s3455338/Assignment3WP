<?php 
	include("header.php");
?>

<div id="heading"><a href="index.php"><img src="logo.jpg" width="165" height="83" id="logo" alt="LOGO"></a></div>

<a href="movies.php" div id="movies"> Movies </a>
	<a href="bookings.php" div id="bookings"> Bookings </a>
	
</form>
<title>Customers details </title>
<body bgcolor="#000001">


<form>
  <h2>Name </h2>

<input id="name" type="text" pattern="[a-zA-Z-_' ]{5,}" autofocus required>  
  
<h2>Email </h2>
  <input type="email" value="" placeholder="name@email.com" required />
    <h2>Phone Number </h2>
  <label for="phonenum">Phone Number +61 (format: xxxx-xxx-xxx):</label><br/>
  <input id="phonenum" type="tel" pattern="^\d{4}-\d{3}-\d{4}$" required > 
  <br>
<input type="submit" value="Submit" />
 </form>

<div id="body">


<div id="footer">
<a href="Contact.html" div id="contact"> CONTACT US </a>
</div>





</body>

</html>

