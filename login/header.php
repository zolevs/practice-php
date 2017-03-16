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

<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>

			<?php

				if(isset($_SESSION['id'])){
					// echo $_SESSION['id'];
					echo "<form action='includes/logout.inc.php'>
							<button>Log out</button>
						</form>";
				} else {
					// echo "You are not logged in.";
					echo"<form method='POST' action='includes/login.inc.php'>
					<input type='text' name='uid' placeholder='username'>
					<input type='password' name='pwd' placeholder='password'>
					<button type='submit'>Login</button>
				</form>";
				}


			 ?>

			<li><a href="signup.php">Signup</a></li>
		</ul>
	</nav>
</header>
