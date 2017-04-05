<!DOCTYPE html>
<html>
<head>
	<title>Function in and out</title>
</head>
<body>

<?php

	$in_firstname = $_GET['firstname'];
	$in_hourslept = $_GET['hourslept'];
	$in_birthyear = $_GET['birthyear'];

	// echo "$in_firstname<br/>$in_hourslept<br/>$in_birthyear";
	$rtnmsg = doValidation($in_firstname, $in_hourslept, $in_birthyear);

	if ($rtnmsg ===''){
		displayPage($in_firstname, $in_hourslept, $in_birthyear);
	} else {
		print $rtnmsg;
		print "<br/> Go BACK and try again.";
	}


// Function definition

	function doValidation($firstname, $hourslept, $birthyear)
	{
		$errmsg ='';
		if(empty($firstname)){
			$errmsg .= "<br/>You must enter a First Name.";
		}
		if(empty($hourslept)){
			$errmsg .="<br/> You must enter a the hours you sleep.";
		} else {
			if(!is_numeric($hourslept)){
				$errmsg .="<br/> You must enter numeric value";
			}
		}
		if(empty($birthyear)){
			$errmsg .="<br/> You must enter your birthyear.";
		} else {
			if(!is_numeric($birthyear)){
				$errmsg .="<br/> You must enter numeric value for year. ";
			} else {
				$length_of_year = strlen($birthyear);

				if ($length_of_year != 4){
					$errmsg .= "<br/> Your birth year must be exactly four numbers. ";
				}
			}
		}
		return $errmsg;
	} //  end function

	function displayPage($firstname, $hourslept, $birthyear)
	{
		$current_year = date('Y');
		$age = $current_year - $birthyear;

		$years_slept = ($hourslept/24)*$age;
		print "<p> Your name is $firstname and you have ";
		print "spent $years_slept years of your life sleeping.</p>";
		if ($age > 50){
			print "<p> Better start planning for Retirement! </p>";

			if ($years_slept > 10){
				print "<p>You sleep to much ! </p>";
			} else {
				print "<p>Time is on your side ! Really. </p>";
				print "<p> Yes, I mean it to you too </p>";
			}
		}
		print "<p> == END == </p>";
	} //end of function


 ?>

</body>
</html>
