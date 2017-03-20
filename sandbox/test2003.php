<!DOCTYPE html>
<html>
<head>
	<title>
		Preserving Data
	</title>
</head>
<body>
<?php

	$errors = array();

	if (isset($_REQUEST['seen_already'])){
		validate_data();
		if(count($errors) != 0){
			display_errors();
			display_welcome();
		} else{
			process_data();
		}
	} else {
		display_welcome();
	}

function validate_data(){
	global $errors;
	if($_REQUEST["FirstName"] == "") {
		$errors[] = "Please enter your name.";
	}
	if($_REQUEST["LastName"] == "") {
		$errors[] = "Please enter your lasname.";
	}
}

function display_errors(){
	global $errors;

	foreach ($errors as $err){
		echo $err."<br/>";
	}
}
function process_data(){
	echo "Your first name is ";
	echo $_REQUEST["FirstName"];
	echo "<br/> Your last name is ";
	echo $_REQUEST["LastName"];
}

//
function display_welcome(){
	$first_name = isset($_REQUEST["FirstName"]) ? $_REQUEST["FirstName"] : "";
	$last_name = isset($_REQUEST["LastName"]) ? $_REQUEST["LastName"] : "";

	// $first_name = isset($_REQUEST["FirstName"]) ? $_REQUEST["FirstName"] : "";
	// $last_name = isset($_REQUEST["LastName"]) ?  $_REQUEST["LastName"] : "";



	echo "<form method='POST' action='test2003.php'>";
		echo "What is yor name";
		echo " <input name='FirstName' type='text' value='$first_name'> ";
		echo " <input name='LastName' type='text' value='$last_name'> ";
		echo "<br>";
		echo "<input type='submit' value='Submit'> ";
		echo "<input type='hidden' name='seen_already' value='hidden_data'> ";

	echo "</form>";
}


 ?>
</body>
</html>
