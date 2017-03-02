<?php

	$navItems = array (
		array(
				'slug' => 'home.php',
				'name' => 'Home'
			),
		array(
				'slug' => 'contact.php',
				'name' => 'Contact'
			),
		array(
				'slug' => 'about.php',
				'name' => 'About'
			),

		);

foreach ($navItems as $key) {

		echo "<li><a href=\"$key[slug]\" /a> $key[name] </li>";
	}


 ?>
