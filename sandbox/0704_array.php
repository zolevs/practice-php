<!DOCTYPE html>
<html>
<head>
	<title>
		0704_array
	</title>
</head>
<body>
<h3>Array basic</h3>
<?php

	$fruitArray = array('Apples', 'Oranges', 'Pears');
	print "<br/>".$fruitArray[0];
	print "<br/>".$fruitArray[1];
	print "<br/>".$fruitArray[2];

 ?>

<h3>Team members 1</h3>

<?php

	$teamMembers = array();

	for ($ii = 1; $ii <= 5; $ii++)
	{
		$member_html_name = 'item'.$ii;
		$member = $_GET[$member_html_name];

		$array_index = $ii - 1;

		$teamMembers[$array_index] = $member;

		print "<br/>".$ii." : ".$teamMembers[$array_index];
	}


 ?>


</body>
</html>
