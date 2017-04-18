<!DOCTYPE html>
<html>
<head>
	<title>Find home</title>
</head>
<body>
	<?php

		$find_city = $_POST['find_city'];

		if (empty($find_city)){
			$find_city = "ALL";
		}
		$document_root = $_SERVER['DOCUMENT_ROOT'];
		$dirname = $document_root."/sandbox/images/";
		echo $dirname."<br/>";
		$dirhandle = opendir($dirname);

		if($dirhandle){
			while(false !== ($file = readdir($dirhandle))){
				if ($file !='.' && $file !='..'){
					displayPropertyInfo($file, $find_city);
				}
			}
		}

		// Function
		function displayPropertyInfo($image_filename, $find_city){
			// get image file
			$imagename = 'images/'.$image_filename;	// jpg file
			// echo $imagename;
			$house_img = "<p><img src='".$imagename."'></p>";
			// get image index information
			$index_filename = str_replace('.jpg', '.txt', $image_filename);
			$filename = 'houses_indexed/'.$index_filename; // txt file
			echo $filename;
			// exit;
			$fp = fopen($filename,'r');
			$show_house = 'Y'; //default value
		// }
		while(true){
			$line = fgets($fp);
			if (feof($fp)){
				break;
			}
			$pos = stripos($line, 'City:');
			if ($pos !== false){
				$city = substr ($line, 5);
				$city = trim ($city);

				if($find_city != 'ALL'){
					$subpos = stripos($city, $find_city);
					if($subpos === false){
						$show_house = 'N';
						break;
					}
				}
			}
			$pos = stripos($line, 'Price:');
			if ($pos !== false){
				$price = substr($line, 6);
				$price = trim($price);
			}

			$pos = stripos($line, 'Bedrooms:');
			if ($pos !== false){
				$bedrooms = substr($line, 9);
				$bedrooms = trim($bedrooms);
			}

			$pos = stripos($line, 'Baths:');
			if ($pos !== false){
				$baths = substr($line, 6);
				$baths = trim($baths);
			}
		}
		if($show_house == 'Y'){
			print $house_img;

			print "City: ".$city."<br/>";
			print "Bed/Baths: $bedrooms / $baths <br/>";
			print "Price: ".$price."<br/><br/>";
		}
	}
	 ?>
</body>
</html>
