<?php
	if(isset($_REQUEST["Radio1"]) && isset($_REQUEST["Radio2"]))
	{
	// if(isset($_REQUEST["Radio1"])){
	// echo "You selected ",$_REQUEST["Radio1"];
		echo "You selected both";
	}
	elseif(isset($_REQUEST["Radio2"])) {
		echo "You selected ", $_REQUEST["Radio2"];
	} else  {
		echo "Nothing is selected";
	}


	 //  else {
	 // echo "You not selected anything";
	 // };

?>
