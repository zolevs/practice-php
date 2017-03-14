<?php

	$conn = mysqli_connect("localhost","root","","logintest");

	// error handler

	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
		// ovu gresku skinuti ako ide na live server jer je losa praksa zbog mogucnosti hakovanja baze ili cega vec ;)

	}
