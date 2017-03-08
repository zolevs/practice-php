<?php
	if(isset($_POST['reg'])){
		// echo "Click - detected";

		$greska = "";

		$username = $_POST['user'];
		$pass = $_POST['pass'];

		if(empty($username)){
			$greska .="Username je obavezno<br>";
		}
		if(empty($pass)){
			$greska .="Password je obavezan <br>";
		}
		if($greska == ""){
			echo "Username ".$username."<br/>";
			echo "Password ".$pass;
		} else {
			echo $greska;
		}
		echo $username."<br/>";
		echo $pass;
	?>
	<br>
		<a href="index.php">Back</a>

	<?php

	} else if(!isset($_POST['reg'])) {
		// echo "Empty";
	?>

	<?php
	}
	?>

<form action="index.php" method="POST">
	Registracija <hr>
	Username: <input type="text" name="user">
	<br/>
	<br/>
	Password: <input type="password" name="pass">
	<br>
	<input type="submit" name="reg">
</form>
