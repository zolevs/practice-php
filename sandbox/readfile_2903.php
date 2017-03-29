<!DOCTYPE html>
<html>
<head>
	<title>Reading file</title>
</head>
<body>
	<h3>Reading file from a File</h3>
	<?php

		$document_root = $_SERVER['DOCUMENT_ROOT'];
		// echo $DOCUMENT_ROOT;
		$filename = $document_root.'/sandbox/data/'.'cities.txt';
		// echo $filename;
		$linesInFile = count(file($filename));
		// echo $linesInFile;
		$fp = fopen($filename, 'r'); // opens file for reading $fp-file pointer
		for ($ii = 1; $ii <= $linesInFile; $ii++){
			$line = fgets($fp); // reads one line from the file
			$city = trim($line); // samo da budemo sigurni da smo sklonili sve praznine

			print 'City: '.$city.'<br/>';
		}

		fclose($fp); // zatvara fajl
	 ?>
</body>
</html>
