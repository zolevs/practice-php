<!DOCTYPE html>
<html>
<head>
	<title>Code execution</title>
</head>
<body>
	<h3>Just heading</h3>
	<?php

		$firstname = $_POST['firstname'];
		$birthyear = $_POST['birthyear'];
		$hours = $_POST['hours'];

		$currentYear = date('Y');

		$age = $currentYear - $birthyear;
		$yearsSlept = number_format(($hours/24) * $age, 2);
		print "<p>Your name is $firstname and you are $age years old</p>";
		print "<p> You slept $yearsSlept till now.</p>";
		if ($age > 40){
			print "<p> Better start planning for Retirement! </p>";
			if ($yearsSlept > 10) {
					print "You slept too much.";
			} else {
				print "Yes, I mean it.";
			}
		} else
		{
			print "<p>Time is on your side. </p>";
		}
		print "<p> - END - </p>";
	 ?>
</body>
</html>
