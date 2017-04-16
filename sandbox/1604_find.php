<!DOCTYPE html>
<html>
<head>
	<title>Find text</title>
</head>
<body>

<?php

	$teamMembers[0] = 'Steve - Shorsport';
	$teamMembers[1] = 'Tory - 2nd base';
	$teamMembers[2] = 'Judy :- Rightfield';
	$teamMembers[3] = 'Mary - Catcher';
	$teamMembers[4] = 'John :- CEnterField';

	$find_name = $_POST['find_name'];

	if(!empty($find_name)) {
		print "<h4> Searching for Team Member names that contains: $find_name </h4>";

		foreach($teamMembers as $member){
			$member_formatted = str_replace(':', '', $member);
			$pos = stripos($member_formatted, '-');
			if ($pos === false) {
				// not found in list
			} else {
				$member_formatted = substr($member_formatted, 0, $pos);
				$member_formatted = trim($member_formatted);

				$pos2 = stripos($member_formatted, $find_name);

				if ($pos2 === false){
					// not found in list
				} else {
					print "<br/>Team member found: ".$member_formatted;
				}

			}
		}
	}
 ?>

</body>
</html>
