<!DOCTYPE html>
<html>
<head>
	<title>Simple calculator</title>
</head>
<body>
		<form>
			<input type="text" name="num1" placeholder="Number one">
			<input type="text" name="num2" placeholder="Number two">
			<select name="operator">
				<option>None</option>
				<option>Add</option>
				<option>Substract</option>
				<option>Multiply</option>
				<option>Divide</option>
			</select>
			<br>
			<button name="submit" value="submit" type="submit">Calculate</button>
		</form>
		<p>The Answer is : </p>
		<?php

			if(isset($_GET['submit'])){
				$result1 = $_GET['num1'];
				$result2 = $_GET['num2'];
				$operator = $_GET['operator'];

				switch ($operator) {
					case 'None':
						echo "Error. You need to select method.";
						break;
					case 'Add':
						echo $result1 = $result1 + $result2;
						break;
					case 'Substract':
						echo $result1 = $result1 - $result2;
						break;
					case 'Multiply':
						echo $result1 = $result1 * $result2;
						break;
					case 'Divide':
						echo $result1 = $result1 / $result2;
						break;
				}
			}

		 ?>
</body>
</html>
