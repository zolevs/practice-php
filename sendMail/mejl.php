<?php

	// parametri za mejler

		require "phpmejl/PHPMailerAutoload.php";

		$mejl = new PHPMailer();
		$mejl -> isSMTP();
		$mejl -> SMTPDebug = 0;
		$mejl -> Debugoutput = 'html';
	// parametri za gmail nalog

		$mejl -> Host = 'smtp.gmail.com';
		$mejl -> Port = 587;
		$mejl -> SMTPAuth = true;
		$mejl -> SMTPSecure = 'tls';

		$mejl -> Username = "ivanovic.zozon@gmail.com";
		$mejl -> Password = "zozon1974";

	// parametri za slanje mejla

		$mejl -> setFrom('ivanovic.zozon@gmail.com','Zoran');
		$mejl -> addReplyTo('ivanovic.zozon@gmail.com','Zoran');
		$mejl -> addAddress('ivanovic.zozon@gmail.com','Zoran');

		$mejl -> Subject = "Naslov ePoste";
		$mejl -> Body = "Postovani <br/> ovo je <b>HTML</b> posta";
		$mejl -> isHtml(true);
	// slanje mejla

		if(!$mejl->send()){
			echo "Mejl nije poslat".$mejl->ErrorInfo;
		} else{
			echo "Mejl je uspesno poslat";
		}

 ?>
