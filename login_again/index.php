<?php
	$fajl_za_konekciju = "config/konekcija.php";
if(file_exists($fajl_za_konekciju)){
	include_once("config/konekcija.php");
	} else {
		echo "Greska.<br/> Fajl za konekciju nije moguce pokrenuti.";
	}
 ?>
