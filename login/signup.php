<?php
	include 'header.php';
?>


<?php

	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	} else {
		echo "You are not logged in.";
	}

 ?>

	<form method="GET" action="includes/signup.inc.php">
		<input type="text" name="first" placeholder="Enter your first name"><br/>
		<input type="text" name="last" placeholder="Enter your last name"><br/>
		<input type="text" name="uid" placeholder="Enter your username"><br/>
		<input type="password" name="pwd" placeholder="Enter your password"><br/>
		<button type="submit">Sing up</button>
	</form>

</body>
</html>
