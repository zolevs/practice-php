<!DOCTYPE html>
<html>
<head>
	<title>Home list</title>
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body>
	<div>
		<a href="page_1.php" border="0">
			<img src="KingLogo.jpg" alt="King logo">
		</a>
	</div>
	<?php

		$find_city = 'ALL';
		if (empty($find_city)){
			$find_city == 'ALL';
		}
		if ($find_city == 'ALL'){
			print "<h2>Current Listings</h2>";
		} else {
			print "<h2>Current Listing that match: ".$find_city." </h2>";
		}
		$document_root = $_SERVER['DOCUMENT_ROOT'];
		// echo $document_root;
		$dirname = $document_root.'/sandbox/images/';
		echo $dirname;
		$dirhandle = opendir($dirname);

		if ($dirhandle){
			while (false !== ($file = readdir($dirhandle))){
				if ($file !='.' && $file !='..'){
					displayPropertyInfo($file, $find_city);
				}
			}
		}

		//  FUNCTION

		function displayPropertyInfo ($image_filename, $find_city)
		{
			// echo $file_name." ".$find_city;
			$imagename = 'images/'.$image_filename;
			$house_img = "<p><img src='".$imagename."' </p>";
			// echo $house_img;
			$index_filename = str_replace('.jpg','.txt',$image_filename);
			// echo $index_filename;
			$filename ='houses_indexed/'.$index_filename; // .txt filename

			// echo $filename;
			$fp = fopen($filename, 'r');

			$show_house = 'Y';

			$descriptionFlag = "N";
			$description = '';

			while(true){
				$line = fgets($fp);
				if (feof($fp)){
					break;
				}
				$pos = stripos($line, 'City:');
				if($pos !== false){
					$city = substr($line, 5);
					$city = trim($city);

					if($find_city !='ALL'){
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

				$pos = stripos($line, 'Footage:');

				if ($pos !== false){
					$footage = substr($line, 8);
					$footage = trim($footage);
				}

				$pos = stripos($line, 'Realtor:');

				if ($pos !== false){
					$realtor = substr($line, 8);
					$realtor = trim($realtor);
				}

				$pos = stripos($line, 'Grabber:');

				if ($pos !== false){
					$grabber = substr($line, 8);
					$grabber = trim($grabber);
				}

				$pos = stripos($line, 'Description:');

				if ($pos !== false){
					$descriptionFlag = "Y";
				}

				if ($descriptionFlag == "Y"){
					$description .= $line."<br/>";
				}

			}

			if ($show_house == 'Y'){
				print $house_img;

				print "<h3>".$grabber."</h3>";
				print "City: ".$city."<br/>";
				print "Bed/Baths: $bedrooms / $baths <br/>";
				print "Price: ".$price."<br/>";
				print "Area: ".$footage."<br/>";
				print "Realtor: ".$realtor."<br/>";

				print "<p>".description."</p><br/><br/>";
			}


		} // end function
	 ?>
</body>

</html>
