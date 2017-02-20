
<form action="test2002_3.php" method="GET">
	Name:<br/><input type="text" name="name"><br/>
	Age: <br/><input type="text" name="age"><br>
	<!-- <input type="hidden" name="submitted" value="true"> -->
	<input type="submit" value="submit">

</form>


<?php
// Test with $_GET

$name = $_GET['name'];
$age = $_GET['age'];
//

if (isset($name) && isset($age)){
	if(!empty($name)&&!empty($age))
	{
		echo $name."<br/>";
		echo $age."<br/>";
	} else  {
		echo "error";
	};
};
 ?>
