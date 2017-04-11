<!DOCTYPE html>
<html>
<head>
	<title>Load array</title>
</head>
<body>
	<h3>Array from a File</h3>
	<?php
		$teamMembers = array();
		$document_root = $_SERVER['DOCUMENT_ROOT'];

		// echo $document_root;

		$filename = $document_root."/sandbox/data/"."glist_2.txt";
		$lines_in_file = count(file($filename));

		$fp = fopen($filename,'r'); //open for read
		for($ii = 1; $ii <= $lines_in_file; $ii++){
			$line = fgets($fp);
			$member = trim($line);
			array_push($teamMembers, $member);
		}
		fclose($fp);
		// sort($teamMembers);
	 ?>
	 <h3>File content:</h3>
	 <?php

	 	$cntr = 0;

	 	foreach ($teamMembers as $element) {
	 		$cntr++;
	 		print $cntr." : ".$element."<br/>";
	 	}

	  ?>
</body>
</html>
