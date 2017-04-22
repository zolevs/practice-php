<!DOCTYPE html>
<html>
<head>
	<title>Home list</title>
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body>
	<div>
		<a href="page_1.php" border="0">
			<img src="KingLogo.jpg" alt="King logo">
		</a>
	</div>
	<?php

		$find_city = $_POST['find_city'];
		if (empty($find_city)){
			$find_city == 'ALL';
		}
		if ($find_city == 'ALL'){
			print "<h2>Current Listings</h2>";
		} else {
			print "<h2>Current Listing that match: ".$find_city." </h2>";
		}
		$document_root = $_SERVER['DOCUMENT_ROOT'];
		// echo $document_root;
		$dirname = $document_root.'/sandbox/images/';
		// echo $dirname;
		$dirhandle = opendir($dirname);

		if ($dirhandle){
			while (false !== ($file = readdir($dirhandle))){
				if ($file !='.' && $file !='..'){
					displayPropertyInfo($file, $find_city);
				}
			}
		}

		//  FUNCTION

		function dispalyProperyInfo ($file_name, $find_city)
		{

		}
	 ?>
</body>

</html>
