<?php

	$products = array (
		"Logo Shirt, Red",
		"Mike the frog, Black",
		"Mike the frog, Yellow"
		);

 ?>

<h1>Full List</h1>
<ul>
	<?php foreach ($products as $product) { ?>
		<li><?php echo $product; ?></li>
	<?php } ?>
</ul>

<!-- Another array -->
