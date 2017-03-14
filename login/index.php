<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="POST" action="login.php">
	<input type="text" name="uid" placeholder="username"><br>
	<input type="password" name="pwd" placeholder="password"><br>
	<button type="submit">Login</button>
	<br>
	<br>
</form>

<?php

	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	} else {
		echo "You are not logged in.";
	}

 ?>

	<form method="POST" action="signup.php">
		<input type="text" name="first" placeholder="Enter your first name"><br/>
		<input type="text" name="last" placeholder="Enter your last name"><br/>
		<input type="text" name="uid" placeholder="Enter your username"><br/>
		<input type="password" name="pwd" placeholder="Enter your password"><br/>
		<button type="submit">Sing up</button>
	</form>
	<br>
	<br>
	<form action="logout.php">
		<button>Log out</button>
	</form>
</body>
</html>
