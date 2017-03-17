<!DOCTYPE html>
<html>
<head>
	<title>Strip HTML</title>
</head>
<body>

<h1>Strip HTML from text</h1>

<?php

	$errors = array();

	if(isset($_REQUEST['seen_already'])) {
		validate_data();
		if(count($errors) != 0){
			display_errors();
			display_welcome();
		} else {
			process_data();
		}
	} else {
		display_welcome();
	}
	function validate_data(){
		global $errors;
		if($_REQUEST['Name'] == ''){
			$errors[] = "<font color='red'> Please enter your name </font>";
		}
	}

	function display_errors(){
		global $errors;
		foreach ($errors as $err) {
			echo $err."<br/>";
		}
	}

	function process_data(){
		echo "Your name is ";
		$ok_text = strip_tags($_REQUEST['Name']);
		echo $ok_text;
	}
	function display_welcome(){
		echo "<form method='post' action='test1703_htmlstrip.php'>
			What is your name <br/>
			<input name='Name' type='text'>
			<br/>
			<br/>
			<input type='submit' value='Submit'>
			<input type='hidden' name='seen_already' value='hidden_data'>
		</form>";

	}
 ?>
</body>
</html>
