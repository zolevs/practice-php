<?php

	$levels = array(
	1 => array(
		'name' => 'Level 1',
		'desc' => 'This is the first description.',
		),
	2 => array(
		'name' => 'Level 2',
		'desc' => 'This is second description.',
		),
	3 => array(
		'name' => 'Level 3',
		'desc' => 'This is third description'
		)
);
	// echo $levels;
	// var_dump($levels);
	// print_r($levels);
	// echo "<br/>";

	// echo ($levels[2]['name']);

	echo '<pre>', print_r($levels, true), '</pre>';
 ?>
