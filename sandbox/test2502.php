<!DOCTYPE html>
<html>
<head>
	<title>Using Buttons</title>
</head>
<body>
	<h1>Using buttons</h1>

	<form name="form1" action="phpbuttons.php" method="GET">
		<input type="HIDDEN" name="Button">
		<input type="BUTTON" value="Button 1" onclick="button1()">
		<input type="BUTTON" value="Button 2" onclick="button2()">
		<input type="BUTTON" value="Button 3" onclick="button3()">
	</form>

	<script type="text/javascript">
		function button1(){
			document.form1.Button.value = "Button 1a"
			form1.submit()
		}
		function button2(){
			document.form1.Button.value = "Button 2a"
			form1.submit()
		}
		function button3(){
			document.form1.Button.value = "Button 3a"
			form1.submit()
		}
	</script>


</body>
</html>

<?php



 ?>
