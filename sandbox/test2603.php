<h3>Simple math</h3>

<?php
	$apples = $_POST['apples'];
	$pears = $_POST['pears'];

	$total = $apples + $pears;
	$difference = $apples - $pears;
	$multipleApples = $apples * 10;
	$divideApples = $apples / 3;
	$moduloApples = $apples % 3;

	print "<p> Total numbers is $total </p>";
	print "<p> Number of divided apples is ".$divideApples;
	print "<p> Number of divided apples (rounded) ".(number_format($divideApples, 2));
	print '<p> Modulo '.$moduloApples." apples";
 ?>
