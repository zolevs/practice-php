<!DOCTYPE html>
<html>
<head>
	<title>This is simple dynamic site</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="header">
		<h1>Website</h1>
	</div>
	<div id="menu">
		<a href="index.php">Home</a>
		<a href="index.php?p=aboutus">About Us</a>
		<a href="index.php?p=contactus">Contact Us</a>
		<a href="index.php?p=news">News</a>
	</div>
	<div id="content">
	<?php
		$pages_dir = 'pages';

		if (!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			$p = $_GET['p'];
			unset($pages[0], $pages[1]);
			// var_dump($pages);
			if(in_array($p.'.inc.php', $pages)){
				// echo "ok";
				include($pages_dir.'/'.$p.'.inc.php');
			}else{
				echo "Sorry page not found. Error 404";
			}
		} else {
				include($pages_dir.'/home.inc.php');
			};

	?>
	</div>
</body>
</html>
