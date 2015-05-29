<?php

session_start();
if (empty($_SESSION['cart'])){
$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);
?>
<p>
	These items have been successfully added to your cart
	<a href="shopping-cart.php">View Shopping Cart</a>
</p>
