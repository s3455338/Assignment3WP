<?php header('Access-Control-Allow-Origin: *'); 
	include("header1.inc");
?>
<!DOCTYPE html>
<html>

<div id="heading"><a href="index.php"><img src="logo.jpg" width="165" height="83" id="logo" alt="LOGO"></a></div>
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
	<script type="text/javascript">
		$(document).ready(function() {
			//Short-Hand AJAX Method for handling JSON Data
			$.getJSON( "proxy.php", function( data ) {
				$.each(data, function(key, value) {
					var Mon, Tue, Wed, Thu, Fri, Sat, Sun = "";
					if(value.sessions.Monday != undefined) {
						Mon = '<div class="mon">Monday: <button type="button" class="btn_cart" onclick="\'$.redirect("cart.php", {"genre": "Action", "day": "Monday", "time":' + value.sessions.Monday +'	, "date": "'+Date.parse('next wednesday').toString('dd-MM-yyyy')+'"});\'">' + value.sessions.Monday + '</button></div>';
					} else {
						Mon = '<div class="mon">Monday: Not Airing</div>';
					} if(value.sessions.Tuesday != undefined) {
						Tue = '<div class="tue">Tuesday: ' + value.sessions.Tuesday + '</div>';
					} else {
						Tue = '<div class="tue">Tuesday: Not Airing</div>';
					} if(value.sessions.Wednesday != undefined) {
						Wed = '<div class="wed">Wednesday: ' + value.sessions.Wednesday + '</div>';
					} else {
						Wed = '<div class="wed">Wednesday: Not Airing</div>';
					} if(value.sessions.Thursday != undefined) {
						Thu = '<div class="thu">Thursday: ' + value.sessions.Thursday + '</div>';
					} else {
						Thu = '<div class="thu">Thursday: Not Airing</div>';
					} if(value.sessions.Friday != undefined) {
						Fri = '<div class="fri">Friday: ' + value.sessions.Friday + '</div>';
					} else {
						Fri = '<div class="fri">Friday: Not Airing</div>';
					} if(value.sessions.Saturday != undefined) {
						Sat = '<div class="sat">Saturday: ' + value.sessions.Saturday + '</div>';
					} else {
						Sat = '<div class="sat">Saturday: Not Airing</div>';
					} if(value.sessions.Sunday != undefined) {
						Sun = '<div class="sun">Sunday: ' + value.sessions.Sunday + '</div>';
					} else {
						Sun = '<div class="sun">Sunday: Not Airing</div>';
					}
					var html = '<div class="col-ten cont-sm-height"><div class="col-two col-sm-height mov_img"><img src="' + value.poster + '" class="poster_img" /></div><div class="col-three col-sm-height"><div class="title"><h1>' + value.title + '</h1></div><div class="classsification"><img src="' + value.rating + '" class="class_img"/></div><div class="genre"></div><br/><br/><div class="description">' + value.description + '</div><div class="trailer"><a href="' + value.trailer + '" target="_blank">View Trailer</a></div></div><div class="col-five col-sm-height"><h3>Session Times</h3><div class="session_times">' + Mon + Tue + Wed + Thu + Fri + Sat + Sun + '</div></div></div>';
					$(".row").append(html);
				});
			});
			
		});
	</script>
	
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
		
		</div>
	</div>
<div id="footer"><a href="Contact.php" id="contact" name="contact">CONTACT US</a><h4>s3455338 Clinton Gilden <br> s3458281 Ahmed Musa</h4></div>
</body>
</html>