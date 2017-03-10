<!DOCTYPE html>
<html>
<head>
	<title>
		Using textfield Arrays
	</title>
</head>
<body>
<h1>Retriving Data from Text Field Arrays</h1>
	Your name is
	<?php

		$text = $_REQUEST['textdata'];
		echo $text['name']."<br/>";

	 ?>
	 Your favorite color is
	 <?php

	 	$text = $_REQUEST['textdata'];
	 	echo $text['color']."<br/>";

	  ?>
</body>
</html>
