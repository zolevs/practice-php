<!DOCTYPE html>
<html>
<head>
	<title>Real estate Home page</title>
	<!-- <link rel="stylesheet" type="text/css" href="basic.css"> -->
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body>
<div>
	<a href="page_1.php" border="0">
		<img src="KingLogo.jpg" alt="King real estate logo">
	</a>
</div>

	<div id="featuredhouse">
		<h2 style="color: blue;">Featured House</h2>
		<img src="../images/bayview_2.jpg">
		<p><strong>As far as the Eye can see!</strong></p>
		<p>Spectacular Ocean and Canyon views!!<br />
			This large estate has room to entertain with<br />
			1200 sq. ft. "ballroom" that features modern<br />
			stone and wood work, vaulted ceilings and <br />
			huge bay windows.  Large Master Suites<br />
			featuring "His" and "Her" bathrooms.
		</p>
	</div>
	<div id="realtorlist">
		<h4 style="color: blue;">Our realtors</h4>

	<?php
		// call function to display realtors
		displayRealtors();
	?>
	</div>

	<div id="findhome">
		<form method="POST" action="homelist.php">
			<p><strong>Enter city:</strong>
				<input type="text" name="find_city" size="20"> <br/>
				(Leave blank to find all houses listed)
			</p>
			<p>
				<input type="submit" value="Find home">
			</p>
			<p>
				Note: We represent homes in the following cities: OceanCove, Tomsville, Pine Beach
			</p>
		</form>
	</div>

	<div id="endpage">
		<a href="http://dev.local/sandbox/formBasic/start.php">Guest Book / Mortage Calculator</a>
	</div>

</body>
</html>

<?php

	function displayRealtors() {
		$document_root = $_SERVER['DOCUMENT_ROOT'];
		$dirname = $document_root."/sandbox/realtors";
		// echo $dirname."<br/>";
		$dirhandle = opendir($dirname);
		if ($dirhandle){
			while (false !== ($file = readdir($dirhandle))) {
				if ($file != '.' && $file !='..'){
					print "<p> <img src='/sandbox/realtors/".$file."'>";

					$imagename_minus_ext = str_replace('.jpg', '', $file);
					$realtor_name = ucfirst($imagename_minus_ext);

					print "<br/>".$realtor_name."</p>\n";
				}
			}
		}
	}

 ?>
