<!DOCTYPE html>
<html>
<head>
	<title>BUttons</title>
</head>
<body>
	It is clicked:
	<?php
		if(isset($_REQUEST["Button"]))
			echo $_REQUEST["Button"];
	 ?>
</body>
</html>
