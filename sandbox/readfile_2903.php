<!DOCTYPE html>
<html>
<head>
	<title>Reading file</title>
</head>
<body>
	<h3>Reading file from a File</h3>
	<?php

		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		// echo $DOCUMENT_ROOT;
		$filename = $DOCUMENT_ROOT.'/sandbox/data/'.'cities.txt';
		// echo $filename;
		$linesInFile = count(file($filename));
		// echo $linesInFile;
		$fp = fopen($filename, 'r'); // opens file for reading
		for ($ii = 1; $ii <= $linesInFile; $ii++){
			$line = fgets($fp); // reads one line from the file
			$city = trim($line);

			print 'City: '.$city.'<br/>';
		}

		fclose($fp);
	 ?>
</body>
</html>
