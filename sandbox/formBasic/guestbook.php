<!DOCTYPE html>
<html>
<head>
	<title>
		Processing data
	</title>
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body>

		<img src="KingLogo.jpg">
	<div id="left">
		<h3>Thank You !</h3>
		<p>A representative will contact you soon.</p>
		<?php
			$firstname = $_GET['firstname'];
			$lastname =	$_GET['lastname'];
			$contact = $_GET['contact'];
			$contactinfo = $_GET['contactinfo'];
			$town = $_GET['town'];
			$comment = $_GET['comment'];

			$date = date("m.d.y");

			print "Information submitted for: $firstname $lastname <br/><br/>";
			print "Your contact $contact is: $contactinfo ";

			print "and you are interested in living in $town <br/><br/>";
			print "Our representative will review your comment below. <br/><br/>";

			print "<textarea type='text' name='comment' cols='25' rows='5' disabled='disabled'>";
			print $comment;
			print "</textarea>";

			// Write to file

			$document_root = $_SERVER['DOCUMENT_ROOT'];

			$filename = $document_root.'/sandbox/formBasic/'.'guestbook.txt';
			$fp = fopen($filename, 'a');

			$output_line = $lastname.'|'.$firstname.'|'.$contact.'|'.$contactinfo.'|'.$town.'|'.$date.'|'.$comment.'|'."\n";
			// fwrite ($fp, $firstname);
			// fwrite ($fp, $lastname);
			// fwrite ($fp, $contactinfo);
			// fwrite ($fp, $town);
			// fwrite ($fp, $comment);
			fwrite($fp, $output_line);

			fclose($fp);
		 ?>
	</div>
</body>
</html>
