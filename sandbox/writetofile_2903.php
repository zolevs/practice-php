<!DOCTYPE html>
<html>
<head>
	<title>Write to file</title>
</head>
<body>
	<h3>Write to file</h3>

<?php

	$document_root = $_SERVER['DOCUMENT_ROOT'];
	// print $document_root;
	//*******************
	// Obrati paznju na dobijeni document_root direktorijum. on se nalazi naspram dev.local
	// D:/git/practice-php a ovo gde radim je D:/git/practice-php/sandbox zato sam i dodavao
	// u $filename putanji
	//*******************
	print "<h4>Writing to file.</h4>";
	$filename = $document_root.'/sandbox/data/'.'glist_1.txt';
	$fp = fopen($filename, 'w'); // opens the file for writing
	$cntr = 1;
	while (true){
		$item_html_name = 'item'.$cntr;
		$item = $_POST[$item_html_name];
		if (empty($item)){
			break;
		}
		$cntr++;
		print "Item: ".$item."<br/>";
		$output_line = $item."\n"; //ako ne stavimo \n dobicemo sve u jednoj liniji
		fwrite($fp, $output_line);
	}
	fclose($fp);
 ?>
<h4>Appending to FILE</h4>
<?php
	$filename = $document_root.'/sandbox/data/'.'glist_2.txt';
		$fp = fopen($filename, 'a'); //opens file for appending
		$cntr = 1;
		while (true){
			$item_html_name = 'item'.$cntr;
			$item = $_POST[$item_html_name];
			if (empty($item)){
				break;
			}
			$cntr++;
			print "Item: ".$item."<br/>";
			$output_line = $item."\n";
			fwrite($fp, $output_line);
		}
		fclose($fp);

 ?>




</body>
</html>
