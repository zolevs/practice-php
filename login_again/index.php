<?php
	$fajl_za_konekciju = "config/konekcija.php";
if(file_exists($fajl_za_konekciju)){
	include_once("config/konekcija.php");
	} else {
		// echo "Greska.<br/> Fajl za konekciju nije moguce pokrenuti.";
	}
 ?>
<a href="index.php">Pocetna</a> |
<a href="index.php?opcija=prijava">Prijava</a> |
<a href="index.php?opcija=registracija">Registracija</a>
<hr>
<?php

	if(isset($_GET['opcija'])){
		$opcija = mysql_real_escape_string($_GET['opcija']);
		// mysql_real_escape_string() sluzi za zastitu
		$fajl = $opcija."/index.php";
		echo $fajl;
		if(file_exists($fajl)){
			include_once($fajl);
		} else {
			echo "Greska !! <br/> Doslo je do greske.";
		}
	} else {
		echo "Pocetna ";
	}

 ?>
