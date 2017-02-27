<?php

// // String function

// // strlen
// // mb_substr
// // explode
// // implode or join
// // nl2br
// // strrev
// // strtolower
// // strtoupper
// // substr_count
// // substr_replace


$search = "My name is Zoran. What is your name?";
$result = substr_count($search,"Zoran");
// // substr_count(string, to serach, start, end)
echo $result;

$result = substr_replace($search, "Zole", 11, 5);
echo $result;


// $string = "SMALL LETTERS to capitals AND reverse";

// echo strtoupper($string)."<br/>";

// $stored = strlen($string);

// echo strtolower($string);


// echo strrev("My text.");
// // text reverse




// echo nl2br ("hello

// new line
// one more
// ");



// $string = "This/ is/ some/ text...";

// var_dump(explode("/",$string));



// $string = "This/ is/ some/ text...";

// echo strlen($string);

// $length = strlen($string);

// echo mb_substr($string, 0, $length-2);



 ?>
