<!DOCTYPE html>
<html>
<head>
	<title>Mortage calculator</title>
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body>
	<img src="KingLogo.jpg">
	<div id="left">
	<h3> Mortgage calculator </h3>
		<?php

			$amount = $_GET['amount'];
			$rate = $_GET['rate'];

			// echo "$amount<br/>$rate";
			if (empty($amount)){
				print "It is empty. Amount.";
				print "<br> Go BACK and try again.";
				print "</body> </html>";
				exit;
			} if (empty($rate)) {
				print "It is empty. Rate.";
				print "<br> Go BACK and try again.";
				print "</body> </html>";
				exit;
			}else{
				if(!is_numeric($amount)){
					print "It is not numeric value.";
					print "<br> Go BACK and try again.";
					print "</body> </html>";
					exit;
				} if(!is_numeric($rate)){
					print "It is not numeric value.";
					print "<br> Go BACK and try again.";
					print "</body> </html>";
					exit;
				}
			}
			print "If you finance $amount at an interest rate of ".$rate."% ...<br>";

			$monthly_payment = ($amount*$rate) / 12;


			print "Your monthly payment would be $".number_format($monthly_payment, 2);


		 ?>
	</div>
</body>
</html>
