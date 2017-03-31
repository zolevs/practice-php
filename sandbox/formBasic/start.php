<!DOCTYPE html>
<html>
<head>
	<title>King real Estate</title>
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body>
	<img src="KingLogo.jpg">
	<div id="left">  <!-- left div -->

		<h3>Please singn up our guest list and a representative will contact you soon.</h3>

		<form method="GET" action="guestbook.php">
			<p>
				First name: <br/>
				<input type="text" name="firstname" size="20">
			</p>
			<p>
				Last name: <br/>
				<input type="text" name="lastname" size="20">
			</p>

			<p>Contact information:
				<input type="radio" name="contact" value="phone" checked="checked">
				Phone
				<input type="radio" name="contact" value="email">
				Email
				<br>
				<input type="text" name="contactinfo">
			</p>

			<p>City where you want to reside: <br>
				<select name="town" size="1">
					<option value="-" selected >-</option>

					<?php
						$document_root = $_SERVER['DOCUMENT_ROOT'];
						$filename = $document_root."/sandbox/formBasic/"."cities.txt";

					 	$lines_in_file = count(file($filename));
					 	$fp = fopen($filename, 'r');

					 	for ($ii = 1; $ii <= $lines_in_file; $ii++){
					 		$line = fgets($fp);
					 		$city = trim($line);
					 		$numberCity = $ii.".".$city;
					 		print $numberCity;
					 	?>
					 	<option value="<?php print $city; ?>"> <?php print $numberCity; ?> </option>;
					 <?php
					 fclose($fp);
					 	}
					 ?>

				</select>
			</p>

			<p>Comments: <br/>
					<textarea type="text" name="comment" cols="25" rows="5"></textarea>
			</p>

			<br>
			<input type="submit" name="" value="Submit data">
		</form>
	<p><a href="view_guestbook.php"> View guest book  ---></a></p>
	</div> <!-- END left div -->

	<div id="right"> <!-- right div -->

		<form method="get" action="mortgagecalculator.php">
			<table>
				<th>Mortage Calculator</th>
				<tr>
					<td>Amount Financed:</td>
					<td><input type="text" name="amount" size='10'></td>
				</tr>

				<tr>
					<td>Interest Rate:</td>
					<td><input type="text" name="rate" size='10'></td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="Enter data"></td>
				</tr>
			</table>

			<p>  </p>
			<p> </p>

		</form>


	</div>  <!-- END right div -->
</body>
</html>
