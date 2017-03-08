<h1>This is the data from form</h1>
<br>

<?php

	// echo $_SERVER['SERVER_NAME']."<br/>";
	// echo $_SERVER['REMOTE_HOST'];
	// echo $_SERVER['SERVER_SOFTWARE'];

	// echo $_SERVER['HTTP_REFERER'];
?>

<?php

	foreach ($_REQUEST as $key => $value) {
		if(is_array($value)){
			foreach ($value as $item) {
				echo $key, " => ", $item, "<br/>";
			};
		}
		else {
			echo $key, " => ", $value, "<br/>";
		}
	}

 ?>
