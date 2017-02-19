<?php

	$products = array ();

	// $products[]="Logo Shirt, Red";
	// $products[]="Mike the frog, Black";
	// $products[]="Mike the frog, Yellow";
	// $products[]="Logo Shirt, Green";

	$products[101]="Logo Shirt, Red";
	$products[102]="Mike the frog, Black";
	$products[103]="Mike the frog, Yellow";
	$products[104]="Logo Shirt, Green";

 ?>

<h1>Full List</h1>
<ul>
	<?php foreach ($products as $product) { ?>
		<li><?php echo $product; ?></li>
	<?php } ?>
</ul>

<!-- Another array -->
