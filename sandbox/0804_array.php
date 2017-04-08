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
	print_r($teamMembers);

 ?>
</body>
</html>
