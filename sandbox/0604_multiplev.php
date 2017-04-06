<!DOCTYPE html>
<html>
<head>
	<title>Function with multiple return value</title>
</head>
<body>
	<?php
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		$document_root = $_SERVER['DOCUMENT_ROOT'];
		// echo $document_root;
		$filename = $document_root.'/sandbox/data/'.'namelist.txt';
		$rtnmsg = addToFile($filename, $lastname, $firstname);

		list($total_rows, $theTable) = displayTable($filename);

		if($total_rows != 'No files'){
			print "<p> Total rows in the Table: ".$total_rows."</p>";
			print $theTable;
		} else {
			print "No file found";
		}

		//******************
		// Function
		//******************

		function addToFile($filename, $lastname, $firstname)
		{
			$fp = fopen($filename, 'a'); //open and append file
			if ($fp){
				$output_line = $lastname."|".$firstname."|"."\n";
				fwrite($fp, $output_line);
				fclose($fp);
				$msg = "<h3> $lastname and $firstname added to file. </h3>";
			} else {
				$msg = "File not opened";
			}
			return $msg;
		} // end of function addToFile

	// displayTable

		function displayTable($filename)
		{
			$myTable = "\n<table border='1'>";

			$myTable .= "<tr>";
			$myTable .= " <th>Last name</th>";
			$myTable .= " <th>First name</th>";
			$myTable .= "</tr>\n\n";

			$line_ctr = 0;

			$fp = fopen($filename, 'r');
			if ($fp){
				while(true){
					$line = fgets($fp);
					if (feof($fp)){
						break;
					}
					$line_ctr++;

					$line_ctr_remainder = $line_ctr % 2;
					if ($line_ctr_remainder == 0){
						$style = "style='background-color: #ffc;'";
					} else {
						$style = "style='background-color: #fff;'";
					} // if for line_ctr_remainder
					list($lastname, $firstname) = explode('|',$line);

					$myTable .="<tr $style>";
						$myTable .="<td>".$lastname."</td>";
						$myTable .="<td>".$firstname."</td>";
					$myTable .="</tr> \n"; // add new line fot html formating
				} // end while
				fclose($fp);
				$myTable .= "</table>";
				$rtn = array($line_ctr, $myTable);
			} else {
				$rtn = array("No file","Dummy");
			}
			return $rtn;
		} // end function displayTable

	 ?>
</body>
</html>
