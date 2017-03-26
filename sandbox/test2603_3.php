<!DOCTYPE html>
<html>
<head>
	<title>Processing data</title>
</head>
<body>
	<?php

		$firstname = $_POST['firstname'];
		$city = $_POST['city'];

		if ($city != "City_3") {
			print "<p> You dont live in the best city</p>";
		} else {
			print "<p> Vrsac Rocks !!!</p>";
		}
		print " -- END -- ";
	 ?>
</body>
</html>
