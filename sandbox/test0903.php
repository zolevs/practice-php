<!DOCTYPE html>
<html>
<head>
	<title>Ttitle for the document</title>
</head>
<style type="text/css">
	p{
		color: red;
		font-size: 22px;
	}
	p:before {
		content: "It is ";
	}
</style>
<body>
	<?php
		$dayOfWeek = date('w');

		// echo $dayOfWeek;

		switch ($dayOfWeek) {
			case 1:
				echo "Monday";
				break;
			case 2:
				echo "Tuesday";
				break;
			case 3:
				echo "Wenesday";
				break;
			case 4:
				echo "<p>Thursday</p>";
				break;
			case 5:
				echo "Friday";
				break;
			case 6:
				echo "Saturday";
				break;
			case 7:
				echo "Sunday";
				break;
		}
	 ?>
</body>
</html>
