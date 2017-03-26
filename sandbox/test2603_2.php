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

		$currentYear = date('Y');

		$age = $currentYear - $birthyear;

		print "<p>Your name is $firstname and you are $age years old</p>";

		if ($age > 40)
		{
			print "<p> Better start planning for Retirement! </p>";
		}
		else
		{
			print "<p>Time is on your side. </p>";
		}
		print "<p> - END - </p>";
	 ?>
</body>
</html>
