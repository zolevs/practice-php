<!DOCTYPE html>
<html>
<head>
	<title>Processing data</title>
</head>
<body>
	<?php

		$firstname = $_POST['firstname'];
		$city = $_POST['city'];

		// if ($city != "City_3") {
		if (! ($city == "City_1" || $city == "City_2") ){
			print "<p> Vrsac Rocks !!!</p>";
		} else {
			print "<p> You dont live in the best city</p>";
		}
		print " -- END -- ";
	 ?>
</body>
</html>
