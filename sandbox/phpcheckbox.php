<?php
	if (isset($_REQUEST["check1"])){
		echo "Jeste, YES";
	}
	if (isset($_REQUEST["check2"])){
		echo "Jeste, NO";
	} else {
		echo "Nothing is set.";
	}
 ?>
