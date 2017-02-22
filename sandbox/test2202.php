<?php

$GLOBALS['level'] = array(
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
			'desc' => 'This is third description',
			'points' => array(1 => 1000),
			)
);



	// echo $levels;
	// var_dump($levels);
	// print_r($levels);
	// echo "<br/>";

	// echo ($levels[2]['name']);

	// echo '<pre>', print_r($level, true), '</pre>';

	// echo $level[3]['points'][1];

// echo $GLOBALS['level'][1]['desc'];

function level_data($level, $data){
	if (array_key_exists($level, $GLOBALS['level']) === true){
		return $GLOBALS['level'][$level]['desc'];
	} else {
		return false;
	}
}

var_dump (level_data (3, 'desc'));

 ?>
