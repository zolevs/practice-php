<!DOCTYPE html>
<html>
<head>
	<title>Retriving file data</title>
</head>
<body>
	<h1>Retriving File Data</h1>
	<br>
	Here are the content of the file:
	<br>
	<?php
	$handle	= fopen($_FILES['userfile']['tmp_name'], "r");
	while (!feof($handle)){
		$text = fgets($handle);
		echo $text, "<br/>";
	}
	fclose($handle);
	 ?>

</body>
</html>
