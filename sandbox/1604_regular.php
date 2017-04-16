<!DOCTYPE html>
<html>
<head>
	<title>Using regular expressions</title>
</head>
<body>
	<h3>Using regular expressions</h3>

	<?php


	$teamMembers = array();

	$teamMembers[0] = 'Steve';
	$teamMembers[1] = 'Tory';
	$teamMembers[2] = 'Jane';
	$teamMembers[3] = 'Judy';
	$teamMembers[4] = 'Mary';
	$teamMembers[5] = 'John';
	$teamMembers[6] = 'Edward';

		$find_name = $_POST['find_name'];

		if(!empty($find_name)){
			print "<h4> Searching for Team member names that Begins with: $find_name </h4>";
			foreach ($teamMembers as $member) {
				$pattern = '/^'.$find_name.'/i'; // matched beginning of string

				$num_of_matches = preg_match($pattern, $member);

				if( $num_of_matches > 0 ){
					print "<br/> $num_of_matches Team members found: ".$member;
				}
			}

			print "<h4>Searcing for Team Member names that Ends with: $find_name</h4>";
			foreach ($teamMembers as $member){

				$pattern = '/'.$find_name.'$/i'; // matched ending of string

				$num_of_matches = preg_match($pattern, $member);

				if( $num_of_matches > 0){
					print "<br/> $num_of_matches Team Member Found: ".$member;
				}
			}
		}

	 ?>
</body>
</html>
