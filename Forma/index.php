<?php
	if(isset($_POST['reg'])){
		echo "Click - detected";
	} else if(!isset($_POST['reg'])) {
		// echo "Empty";
	?>

	<?php
	}
	?>

<form action="index.php" method="POST">
	Username: <input type="text" name="">
	<br/>
	<br/>
	Password: <input type="password" name="">
	<br>
	<input type="submit" name="reg">
</form>
