<?php

	$descriptionMembers = array (
		array(
			'name' => 'Babaroga',
			'position' => 'Manager',
			'bio' => 'Orem ipsum dolor sit amet, consectetur adipisicing elit. Sint illum officiis architecto.',
			'img' => 'head_1'
			),
		array(
			'name' => 'Samojed',
			'position' => 'Executive',
			'bio' => 'Dolor sit amet, consectetur adipisicing elit. Mollitia impedit aut tempora reiciendis, repellat iste saepe, optio facilis?',
			'img' => 'head_2'
			),
		array(
			'name' => 'Papadubi',
			'position' => 'Manager',
			'bio' => 'Ipsum dolor sit amet, consectetur adipisicing elit. Placeat ipsum suscipit dolorum vitae veniam quam!',
			'img' => 'head_3'
			),
		array(
			'name' => 'Oparaci',
			'position' => 'Chef',
			'bio' => 'Krem ipsum dolor sit amet, consectetur adipisicing elit. Veniam veritatis, nesciunt velit?',
			'img' => 'head_4'
			)
		);
?>
	<?php
		foreach ($descriptionMembers as $member) {
	?>

		<img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name'] ?>" />

	<?php } ?>

