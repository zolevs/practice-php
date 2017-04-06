<!DOCTYPE html>
<html>
<head>
	<title>Variable scope</title>
</head>
<body>
	<h3>Variable scope</h3>
	<?php

		$institution = "Learn PHP";

		$rtr_info = doStartup();

		print "<br/> Institution : ".$institution;
		print "<br/> Class : ".$class; // out of scope
		print "<br/> Class type : ".$class_type; //out of scope
		print "<br/> rtr_info : ".$rtr_info;
		print "<br/> Degree: ".$degree; // funkcija nemoze da joj pristupi ali ovde mozemo

		// Function

		function doStartup()
		{
			$class = "PHP and MySQL";
			$classInstructorInfo = getClassInstructorInfo($class);
			return $classInstructorInfo."*degree: ".$degree;
		} // end of function doStartup

		function getClassInstructorInfo($a_class)
		{
			global $degree;
			$class_type = "Video";

			if($a_class == "PHP and MySQL"){
				$instructor = 'First Second';
				$degree = "Intermediate";
			}
			return $instructor;
		} // end of function getClassInstructorInfo

	 ?>
</body>
</html>
