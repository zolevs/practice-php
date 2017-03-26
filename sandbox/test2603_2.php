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
		if ($age > 40 && $yearsSlept > 10){
			print "<p> Better start planning for Retirement! </p>";
			print "You slept too much.";
		} else	{
			print "Time <em>might</em> be on your side, or maybe you <em>sleep</em> too much.";
		}
		print "<p> - END - </p>";
	 ?>
</body>
</html>
