<?php 
      session_start();
	include("header.php");
	$pageTitle = 'bookings';
?>

<div id="heading"><a href="index.php"><img src="logo.jpg" width="165" height="83" id="logo" alt="LOGO"></a></div>
<a href="movies.php" div id="movies"> Movies </a>
	<a href="bookings.php" div id="bookings"> Bookings </a>
	

<div id="body"></div>
<div id="box1"></div>
<div id="Title">


<form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method="post">

<h2>Choose a movie: </h2>
<select name="film" id="film" onchange="popDate(this.id, 'day')">
 <option value="0">Select Movie...</option>
 <option value="fast7">Fast 7</option>
 <option value="longride">The Longest Ride</option>
 <option value="gethard">Get Hard</option>
 <option value="shaunsheep">Shaun The Sheep</option>
</select>
<input type="hidden" id="genre" value="" />
 <h2>Choose a Day:  </h2>
<select name="day" id="day" onchange="popTime(this.id, 'time', 'genre')">

</select>

<h2> Choose Time: </h2>
<select name="time" id="time" onchange="popPrice(this.id, 'day')">

</select>

<table><tbody>

<tr><td>Ticket Type:</td><td>Quantity</td><td>Sub-Total</td></tr>
<tr><td><label> <input type="hidden" id="CAtickets" value="8" />Child:</label></td>
 <td><input  type="number" id="CA" name="SC" class="tkt_amount" value="0" min="0" max="05"  /></td><td class="sbt_CA"></td></tr>
<tr><td><label> <input type="hidden" id="SAtickets" value="12"  />Adult:</label></td>
 <td><input  type="number" id="SA" name="SA" class="tkt_amount" value="0" min="0" max="05"  /><td class="sbt_SA"></td></td></tr>
<tr><td><label> <input type="hidden" id="SPtickets" value="10"  />Concession:</label></td>
 <td><input  type="number" id="SP" name="SP" class="tkt_amount" value="0" min="0" max="05"  /><td class="sbt_SP"></td></td></tr>
<tr><td><label> <input type="hidden" id="FAtickets" value="25"  />First Class:</label></td>
 <td><input  type="number" id="FA" name="FA" class="tkt_amount" value="0" min="0" max="05"  /><td class="sbt_FA"></td></td></tr>
<tr><td><label> <input type="hidden" id="FCtickets" value="20"  />First Class Child:</label></td>
 <td><input  type="number" id="FC" name="FC" class="tkt_amount" value="0" min="0" max="05"   /><td class="sbt_FC"></td></td></tr>
<tr><td><label> <input type="hidden" id="B1tickets" value="20"  />Beanbag 1 Person:</label></td>
 <td><input  type="number" id="B1" name="B1" class="tkt_amount" value="0" min="0" max="05"  /><td class="sbt_B1"></td></td></tr>
<tr><td><label> <input type="hidden" id="B2tickets" value="20"  />Beanbag 2 People:</label></td>
 <td><input  type="number" id="B2" name="B2" class="tkt_amount" value="0" min="0" max="05"   /><td class="sbt_B2"></td></td></tr>
<tr><td><label> <input type="hidden" id="B3tickets" value="20"  />Beanbag 3 People:</label></td>
 <td><input  type="number" id="B3" name="B3" class="tkt_amount" value="0" min="0" max="05"  /><td class="sbt_B3"></td></td></tr>
 </tbody></table>
<div>Total Price:<input type="hidden" class="hidden_total" name="price" value="" /><span class="total_price"></span></div>
 <input type="submit" value="Book Tickets"/>
</form>
<div id="inserts"> </div>
</div>
<div id="footer"><a href="Contact.php" id="contact" name="contact">CONTACT US</a><h4>s3455338 Clinton Gilden <br> s3458281 Ahmed Musa</h4></div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.tkt_amount').change(function() {
			var total; 
			var priceSA = $('#SAtickets').val();
			var priceCA = $('#CAtickets').val();
			var priceSP = $('#SPtickets').val();
			var priceFA = $('#FAtickets').val();
			var priceFC = $('#FCtickets').val();
			var priceB1 = $('#B1tickets').val();
			var priceB2 = $('#B2tickets').val();
			var priceB3 = $('#B3tickets').val();
			
			var sbt_CA = priceCA * $('#CA').val();
			$('.sbt_CA').html('$' +sbt_CA.toFixed(2));
			var sbt_SA = priceSA * $('#SA').val();
			$('.sbt_SA').html('$' +sbt_SA.toFixed(2));
			var sbt_SP = priceSP * $('#SP').val();
			$('.sbt_SP').html('$' +sbt_SP.toFixed(2));
			var sbt_FA = priceFA * $('#FA').val();
			$('.sbt_FA').html('$' +sbt_FA.toFixed(2));
			var sbt_FC = priceFC * $('#FC').val();
			$('.sbt_FC').html('$' +sbt_FC.toFixed(2));
			var sbt_B1 = priceB1 * $('#B1').val();
			$('.sbt_B1').html('$' +sbt_B1.toFixed(2));
			var sbt_B2 = priceB2 * $('#B2').val();
			$('.sbt_B2').html('$' +sbt_B2.toFixed(2));
			var sbt_B3 = priceB3 * $('#B3').val();
			$('.sbt_B3').html('$' +sbt_B3.toFixed(2));
			
			total = sbt_CA + sbt_SA + sbt_SP + sbt_FA + sbt_FC + sbt_B1 + sbt_B2 + sbt_B3;
			$('.total_price').html('$' + total.toFixed(2));
			$('.hidden_total').val(total.toFixed(2));
		});
	});
</script>
</body>
</html>