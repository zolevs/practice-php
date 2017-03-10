<!DOCTYPE html>
<html>
<head>
	<title>Determining Browser Type</title>
</head>
<body>
 	<?php

 		if(strpos($_SERVER["HTTP_USER_AGENT"], "Chrome")){
 			echo "You are using Chrome";
 		} else {
 			echo "You are not using IE <br/>";
 			echo ($_SERVER['HTTP_USER_AGENT']);
 		}

 	 ?>
</body>
</html>
