<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<h3>Simple math</h3>

<?php
	$apples = $_POST['apples'];
	$pears = $_POST['pears'];

	$total = $apples + $pears;
	$difference = $apples - $pears;
	$multipleApples = $apples * 10;
	$divideApples = $apples / 3;
	$moduloApples = $apples % 3;
	$fixed = number_format($divideApples,2);
 ?>
	<table border='1'>
		<tr>
			<th>Description</th>
			<th>Calculated</th>
		</tr>

			<?php
				print "<tr> <td> Total numbers is </td> <td> $total </td></tr> \n";
				print "<tr> <td> Number of divided apples is </td> <td> $divideApples </td> </tr> \n";
				print "<tr> <td> Number of divided apples (rounded) </td> <td> $fixed </td> </tr> \n";

				print "<tr> <td> Number of divided apples (rounded) </td> <td>"; print(number_format($divideApples,2)); "  </td> </tr> \n";

				print "<tr> <td> Modulo </td> <td> $moduloApples </td> </tr> \n";
			?>



	</table>


</body>
</html>
