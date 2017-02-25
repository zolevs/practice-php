<!DOCTYPE html>
<html>
<head>
	<title>Read Button</title>
</head>
<body>
	You have clicked:
	<?php
		if(isset($_REQUEST["Button"])){
			echo $_REQUEST["Button"],"<br/>";
		}
	 ?>
</body>
</html>
