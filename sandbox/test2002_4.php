<form action="test2002_4.php" method="POST">
	Your password: <br>
	<input type="password" name="password"><br/>

	<input type="submit" value="Submit">
</form>


<?php


$password = "password";

	if(isset($_POST['password'])&&!empty($_POST['password'])){
	echo "Submitted and filled."."<br/>";

	$password_post = $_POST['password'];

	if($password_post == $password){
		echo "They are same";
	}else {
		echo "Not the same";
	}
	};

 ?>
