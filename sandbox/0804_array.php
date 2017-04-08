<!DOCTYPE html>
<html>
<head>
	<title>Load array</title>
</head>
<body>
<?php
	$teamMembers = array();

	for ($ii = 1; $ii<=5; $ii++){
		$members_html_name = 'member'.$ii;
		$member = $_GET[$members_html_name];

		if(!empty($member)){
			array_push($teamMembers, $member);
		}
	}

	sort($teamMembers);
 ?>

<h4>Team 1:</h4>

<?php

	$arrLen = sizeof($teamMembers);

	for ($jj = 0; $jj < $arrLen; $jj++) {
		$display_num = $jj + 1;
		print "<br/>".$display_num.": ".$teamMembers[$jj];
	}

 ?>

</body>
</html>
