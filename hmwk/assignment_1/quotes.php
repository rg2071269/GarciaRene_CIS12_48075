<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type"content="text/html; charset=utf-8" />
	<title>Constants</title>
</head>
<body>
	
	<?php # Script 1.10 - quotes.php
	
	// set variables:
	$quantity = 30;
	$price = 119.95;
	$taxrate = .05;
	
	//calculate the total.
	$total = $quantity * $price;
	$total = $total + ($total * $taxrate);
	
	//format the total
	$total = number_format($total, 2);
	
	//using double quotation marks:
	echo "<h3>Using double quotation marks:</h3>";
	echo "<p>You are purchasing <b>$quantity</b> 
	widget(s) at a cost of <b>\$$price</b> 
	each. With tax, the total comes to <b>\$$total</b>.</p>\n";	
	
	//using single quotation marks:
	echo '<h3>Using single quotation marks:</h3>';
	echo '<p>You are purchasing <b>$quantity</b> 
	widget(s) at a cost of <b>\$$price</b> 
	each. With tax, the total comes to <b>\$$total</b>.</p>\n';
	?>
</body>
</html>
