<!DOCTYPE html>
<html>
<head>
	<title>
		String Delimiters
	</title>
</head>
<body>
	<h3>String Delimiters</h3>
	<?php

		$firstName = "Sometext";

		print "<p>\"$firstName\", I sad.\"Don't read this again.\"</p>";

		echo "<br/>";

		print '<p> $firstName </p>';

		echo "<br/>";

		print "<p> $firstName </p>";

		print "This is start ".$firstName.' " this is end."';
	 ?>
</body>
</html>
