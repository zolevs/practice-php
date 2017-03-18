<?php

	// dodela parametara
	$server = "localhost";
	$username_server = "root";
	$password_server = "";

	$baza = "baza_podataka";

	$konekcija = mysql_connect("$server","$username_server","$password_server");
	if ($konekcija){
	//	echo "Uspesna konekcija na server."."<br/>";
		$selekcija = mysql_select_db($baza, $konekcija);
			if ($selekcija){
				// echo "Selekcija BAZE je uspesna"."<br/>";
			}else{
				// echo "Selekcija BAZE je neuspesna"."<br/>";
			}
	} else {
		echo "Neuspesna konekcija na server."."<br/>";
	}

	// ispitivanje postojanja konekcije
		// selekcija baze podataka


 ?>
