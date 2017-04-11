<!DOCTYPE html>
<html>
<head>
	<title>Load directory</title>
</head>
<body>
<?php

	$document_root = $_SERVER['DOCUMENT_ROOT'];

	$dirname = $document_root."/sandbox/img/";

	// echo $dirname;
	$dirhandle = opendir($dirname);

	if($dirhandle) {
		$houseFiles = array();

		while (false !== ($file = readdir($dirhandle)))
		{
			if ($file != '.' && $file != '..')
			{
				array_push($houseFiles, $file);
			}
		}
	}
	sort ($houseFiles);

	foreach ($houseFiles as $element){
		$imagename = 'img/'.$element;
		// echo $imagename."<br/>";
		print "<p><img src='".$imagename."''></p>\n";
	}

 ?>
</body>
</html>
