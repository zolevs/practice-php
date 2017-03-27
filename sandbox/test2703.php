<!DOCTYPE html>
<html>
<head>
	<title>Field validation</title>
</head>
<body>
	<?php

		$firstname 	= $_POST['firstname'];
		$hoursslept = $_POST['hoursslept'];
		$birthyear	= $_POST['birthyear'];

		if (empty($firstname)){
			print "You must enter a First name";
			print "</body> </html>";
			print "</body></html>";
			exit;
		}
		if (empty($hoursslept))
		{
			print "You must enter hours slept.";
			print "</body></html>";
			exit;
		}
		else
		{
			if(!is_numeric($hoursslept))
			{
				print "The hours you enter must be numeric";
				print "</body></html>";
				exit;
			}
		}
		if (empty($birthyear))
		{
			print "You must enter your Birth Year";
			print "</body></html>";
			exit;
		}
		else
		{
			$length_of_year = strlen($birthyear);
			if ($length_of_year != 4)
			{
				print"Your birth year must be exactly four numbers.";
				print"</body></html>";
				exit;
			}
		}

		$currentYear = date('Y');
		$age = $currentYear - $birthyear;
		$yearsSlept = ($hoursslept/24)*$age;
		$yearsSlept_decimal = number_format($yearsSlept,2);

		print"<p>Your name is $firstname and you have spent $yearsSlept_decimal years of your life sleeping. </p>";

		if ($age > 40)
		{
			print "<p>Better start panning for Retirement </p>";
			if ($yearsSlept > 10)
			{
				print"<p> You sleep too much !!!</p>";
			}
		}
		else
		{
			print "<p>Time is on your side ! Really !!</p>";
		}
		print "<p> --- END --- </p>";
	 ?>
</body>
</html>
