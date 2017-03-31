<?php
	$document_root = $_SERVER['DOCUMENT_ROOT'];
	$filename = $document_root.'/sandbox/formBasic/'.'guestbook.txt';
	$fp = fopen($filename, 'r');

	$display='';
	$line_ctr = 0;

	while(true){
		$line = fgets($fp);
		if (feof($fp)){
			break;
		}
		$line_ctr++;
		$line_ctr_remainder = $line_ctr % 2;
		if($line_ctr_remainder == 0){
			$style = "style='background-color: #fffffc;'";
		} else {
			$style = "style='background-color: #fff;'";
		}
		list($lastname, $firstname, $contact, $contactinfo, $town, $date, $comment) = explode('|', $line);

		$display .="<tr $style>";
			$display .="<td>".$lastname."</td>";
			$display .="<td>".$firstname."</td>";
			$display .="<td>".$contact."</td>";
			$display .="<td>".$contactinfo."</td>";
			$display .="<td>".$town."</td>";
			$display .="<td>".$date."</td>";
			$display .="<td>".$comment."</td>";
		$display.="</tr>\n";
	}
	fclose($fp);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Show guest book.
	</title>
</head>
<body>
	<table border='1'>
		<th>Last name</th>
		<th>First name</th>
		<th>Contact choice</th>
		<th>Phone or Email</th>
		<th>City choice</th>
		<th>Contact date</th>
		<th>Comments</th>
		<?php
			print $display;
		 ?>
	</table>
</body>
</html>
