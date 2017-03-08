<h1>This is the data from form</h1>
<br>

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
