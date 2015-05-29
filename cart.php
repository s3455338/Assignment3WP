<?php
if(isset($_POST['day'], $_POST['time'], $_POST['date'], $_POST['movie_name'])) {
	if(isset($_SESSION['cart'])) {
		$_SESSION['cart']['screenings'] = array('movie_name'=>$_POST['movie_name']'day'=>$_POST['day'], 'time'=>$_POST['time'], 'date'=>$_POST['date']);
	
	}
}



$whereIn = implode (',', $_SESSION['cart']);

 #replace 'movies' with whereever the item is stored, then give movie names class IDs
 
 ?>
 
 <!DOCTYPE html>
<html>

<div id="heading"><a href="index.html"><img src="logo.jpg" width="165" height="83" id="logo" alt="LOGO"></a></div>
<nav> 
<ul class="main_nav">
	
	
	<a href="movies.php" div id="movies"> Movies </a>
	<a href="bookings.php" div id="bookings"> Bookings </a>
	

	
	
 </ul></nav>
<head>
	<title>Movie Info</title>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="jquery.redirect.js"></script>
	<script type="text/javascript" src="date.js"></script>
	
	
		<style>
			* { margin: 0; }
			html, body { padding: 0; font-family: Arial; background: black;}
			
			.wrapper { width: 1200px; margin: 0 auto; background: #383838; border-left: 1px solid white; border-right: 1px solid white;}
			.row { margin: 5px 15px; }
			.col-ten { width: 98%; padding: 1%; background: silver; margin: 10px 0;}
			.col-three { width: 31%; padding: 5px 1%; }
			.col-two { width: 18%; padding: 5px 1%; }
			.col-five { padding: 5px 1%; }
			.cont-sm-height { display: table; border-spacing: 4px; }
			.col-sm-height { display: table-cell; vertical-align:top; float: none; }
		</style>
	</head>
	<body>
	<div class="wrapper">
		<div class="row">
		<?php var_dump($_SESSION['cart']); ?>
		</div>
	</div>
<div id="footer"><a href="Contact.php" id="contact" name="contact">CONTACT US</a><h4>s3455338 Clinton Gilden <br> s3458281 Ahmed Musa</h4></div>
</body>
</html>