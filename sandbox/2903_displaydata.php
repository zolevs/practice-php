<?php

	// Gather data from form

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$document_root = $_SERVER['DOCUMENT_ROOT'];

	$filename = $document_root.'/sandbox/data/'.'namelist.txt';

	// Add name Information to file

	$fp = fopen($filename, 'a'); // otvara fajl sa append atributom $fp - fajl pointer
	$output_line = $lastname."|".$firstname."|"."\n";
	fwrite($fp, $output_line);
	fclose($fp);

	print "<h3> $lastname, $firstname Added to file. </h3>";


 echo "<hr>";
	// Read name from a file
 ?>
<table border='1'>
	<tr>
		<th>Last Name</th>
		<th>First Name</th>
	</tr>

<?php

	$display = "";
	$line_ctr = 0; //line counter
	$fp = fopen($filename, 'r');
	while (true) {
		$line = fgets($fp);
		if (feof($fp)){
			break;
		}
		$line_ctr++;
		$line_ctr_remainder = $line_ctr % 2;

		if($line_ctr_remainder == 0){
			$style = "style='background-color: #ffffcc;'";
		} else {
			$style = "style='background-color: #fff;'";
		}

		list($lastname, $firstname) = explode('|', $line);

		$display .= "<tr $style>";
			$display .="<td>".$lastname."</td>";
			$display .="<td>".$firstname."</td>";
		$display .="<tr>\n";
	}
	fclose($fp);
	print $display;
 ?>
 </table>

