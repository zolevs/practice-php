<!DOCTYPE html>
<html>
<head>
	<title>Text fields</title>
</head>
<body>
	<?php

		if(isset($_GET['Name'])){
			echo "Your name is ".$_GET['Name'];
		} else {
	?>

	<form method="GET" action="test1203.php">
		<p>What's your name</p>
		<input type="Text" name="Name">
		<input type="Submit" value="Send" ="">
	</form>

	<?php
		}
	 ?>


</body>
</html>
