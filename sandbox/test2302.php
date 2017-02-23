<?php

$exp = time()+86400;
$exp_unset = time()-86400;

// unset cookie
setcookie("age","",$exp_unset);

if(isset($_COOKIE['age'])){
	echo "Cookie is set.";
} else {
	echo "Cookie is not set";
}


// echo $_COOKIE['name']." is ".$_COOKIE['age'];
// echo "<br/>";
// print_r($_COOKIE);


// setcookie("age", 42, $exp);


// echo $_COOKIE["age"];

/*


setcookie("name","Zozon",$exp);
*/

// echo $_COOKIE["name"]


// ***** Comment reminder
// 1-name of the cookie
// 2-data needs to be stored
// 3-time to keep cookie (to expire)
 ?>
