<?php

	$document_root = $_SERVER['DOCUMENT_ROOT'];

	// echo $document_root;

	$filename = $document_root.'/sandbox/data/'.'cities.txt';
	// echo $filename;

	displayFile($filename);

	function displayFile($var_filename)
	{
		$lines_in_file = count(file($var_filename));
		$fp = fopen($var_filename, 'r');
		for ($ii = 1; $ii <= $lines_in_file; $ii++){
			$line = fgets($fp);
			$city = trim($line);

			print 'City : '.$city.'<br/>';
		}
	}

 ?>
