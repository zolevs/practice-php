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

			// print "$firstname<br/> $lastname<br/> $contact</br> $contactinfo<br/> $town<br/> $comment<br/>";

			print "Information submitted for: $firstname $lastname <br/><br/>";
			print "Your contact $contact is: $contactinfo ";
			// if ($contact == "phone"){
			// 	print "Your phone is: $contactinfo <br/>";
			// } else {
			// 	print "Your email is: $contactinfo <br/>";
			// }
			print "and you are interested in living in $town <br/><br/>";
			print "Our representative will review your comment below. <br/><br/>";

			print "<textarea type='text' name='comment' cols='25' rows='5' disabled='disabled'>";
			print $comment;
			print "</textarea>";
		 ?>
	</div>
</body>
</html>
