<?php
$firstName = $_GET['firstname'];
$lastname = $_GET['lastname'];
$position = $_GET['position'];
$text = $_GET['comment'];
$employetype = $_GET['etype'];

$fullname = "$firstName $lastname";

$currentYear = date('Y');

if (isset($_GET['ba'])){
	$ba = $_GET['ba'];
} else {
	$ba = "";
}
if (isset($_GET['ma'])){
	$ma = $_GET['ma'];
} else {
	$ma = "";
}
if (isset($_GET['phd'])){
	$phd = $_GET['phd'];
} else {
	$phd="";
}

print "<strong>Entered name: $firstName</strong><br/>";
print "Entered last name: $lastname <br/><br/>";
print "Full name: $fullname<br/><br/>";

print "<strong>Position: $position </strong><br/>";

print "Entered text: $text<br/>";

print "<textarea name='text' rows='7' cols='20' disabled='disabled'>";
print $text;
print "</textarea> <br/>";

print "$employetype <br/>";
print "Degree received: $ba $ma $phd <br/>";

print "Current Year $currentYear <br/>";



?>
