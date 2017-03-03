<?php

	$descriptionMembers = array (
		array (
			'name' => 'Babaroga',
			'position' => 'Manager',
			'bio' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint illum officiis architecto.',
			'img' => 'head_1'
			),
		);
?>
	<?php
		foreach ($descriptionMembers as $member) {
	?>

		<img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name'] ?>" />

	<?php } ?>

