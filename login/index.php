<?php
	include 'header.php';
?>
<form method="POST" action="includes/login.inc.php">
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


	<br>
	<br>
	<form action="includes/logout.inc.php">
		<button>Log out</button>
	</form>
</body>
</html>
