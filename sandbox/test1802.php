<?php

	$flavors = array("Vanilla", "Chocolate", "Strawberry","Zole");

 ?>

<?php echo "We have ".count($flavors)." flavors aviable. Here's list: \n"  ?>
<?php
foreach ($flavors as $flavor){
	echo $flavor."\n";
}
?>



<!-- <pre> -->

	<?php /// echo $flavor[0]."\n".$flavor[1]. "\n".$flavor[2]."\n".$flavor[3] ?>

	<?php // echo ($flavor[3]); ?>
	<?php // var_dump($flavor) ?>
<!-- </pre> -->
