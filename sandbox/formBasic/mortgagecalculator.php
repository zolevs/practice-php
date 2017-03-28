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

			$msg = "";
			$error_cnt = 0;
			// echo "$amount<br/>$rate";
			if (empty($amount)){
				$msg .= "<br>Please enter an amount<br/>";
				$error_cnt++;
			} else {
				if (!is_numeric($amount)) {
					$msg .="<br>Amount entered".$amount." is not numeric.";
					// Ovde na nije cilj da odstampamo odmah gresku vec da deo greska savuvamo za citav niz gresaka
					$error_cnt++;
				}
			}

			if(empty($rate)){
				$msg .= "Please enter an interest rate<br/>";
				$error_cnt++;
				} else {
					if	(!is_numeric($rate)){
						$msg .="<br>Interest rate entered ".$rate." is not numeric";
						$error_cnt++;
					}
				}

			// print "If you finance $amount at an interest rate of ".$rate."% ...<br>";

			$calc = $rate/100;
			$monthly_payment = ($amount*$calc) / 12;

			$round = number_format($monthly_payment, 2);

			// print "Your monthly payment would be $".number_format($monthly_payment, 2);
		 ?>
		 <div id="styling">
		 	<?php

		 		if($error_cnt>0){
		 			print "$msg";
		 		} else {
		 			print "Mortage Calculator";
		 			print "If you finace $".$amount." at an interest rate of ".$rate."%";
		 			print "Your Monthly payment would be $".$round;
		 		}


		 	 ?>
		 </div>
	</div>
</body>
</html>
