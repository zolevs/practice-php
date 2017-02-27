<?php

	// // Time and Date

$currenttime = date("h:i:s");
$goaltime = "10:20:00";

// echo $currenttime;
// echo $goaltime;


echo "Current time: $currenttime <br/>
Goal time: $goaltime";

echo "<meta http-equiv='refresh' content='1'>";
// // for refreshing page every one seconds

if ($currenttime >= $goaltime){
	echo "<b>Goal has been reached.</b>";
}

// echo date("D-M-Y");

// echo date("H:i:s")

// $offset = strtotime("+1 days");
// echo $offset."<br>";
// echo date("d-m-y", $offset);
// $offset = strtotime("+1 weeks 1 hours");
// $date = date("D-M-Y");
// $time = date("H:i:s");

// echo "The time is $time and the date is $date";

 ?>
