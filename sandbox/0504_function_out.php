<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Function data out</h3>
	<?php

		$rtnData = displayMsg();

		print $rtnData;

		function displayMsg()
		{
			$firstname = $_GET['firstname'];
			$message = '<p>Hello '.$firstname." ! </p>";
			return $message;
		}

	 ?>
</body>
</html>
