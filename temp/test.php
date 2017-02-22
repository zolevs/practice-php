<?php
	if(isset($_POST['name'])){
		$name=$_POST['name'];
		if(!empty($name)){
			echo "Done!";
			$sentence = $name." woke up..";
		} else {
			echo "Please enter your name";
		};
	};
 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="test.php" method="POST">
		Type your name <input type="text" name="name" value="<?php echo $_POST['name']; ?>">

		<input type="submit" value="sub">

	</form>

	<textarea rows="7" cols="20">
		<?php echo $sentence ?>
	</textarea>

</body>
</html>


