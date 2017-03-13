<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Kontakt forma</h1>

	<?php
	$ime = "";
	$errorIme = "";

	$email = "";
	$errorEmail = "";

	$pitanje = "";
	$errorPitanje = "";

		if (isset($_GET['submit'])){
			// echo "Sve ok pritisnuto je dugme ";
			// echo ($_GET['submit']);

			// Ispitano ime
			if(!empty($_GET['ime'])){
				$ime = $_GET['ime'];
				echo "Uneto ime: $ime <br/>";
			} else {
				// $ime = "";
				$errorIme = "Molimo Vas da unesete vase ime.<br/>";
			}
			// ispitivanje email
			if(!empty($_GET['email'])){
				$email = $_GET['email'];
				echo "Unet email je: $email <br/>";
			} else {
				// $email = "";
				$errorEmail = "Molimo Vas da unesete email.<br/>";
			}
			// ispitivanje poruke
			if(!empty($_GET['pitanje'])){
				$pitanje = $_GET['pitanje'];
				echo "Uneto pitanje je: $pitanje <br/>";
			} else {
				// $pitanje = "";
				$errorPitanje = "Molimo Vas da unesete pitanje.";
			}

			// ovde ce ici slanje mail-a

			if ($errorIme == "" && $errorEmail == "" && $errorPitanje == ""){
				echo "Poruka poslata uspesno";
			} else {
				echo "Poruka nije poslata, molimo proverite poruku.";
			}

		}

	 ?>
	<hr>
	<form method="get" action="index.php">
		<table>
			<tr>
				<td>Ime i prezime</td>
				<td><input type="text" name="ime"
				value="<?php
					if(isset($_GET['ime'])){
						echo $_GET['ime'];
					}
				?>">
					<?php
						if($ime == ""){
							echo $errorIme;
						}
					?>
				</td>
			</tr>
			<tr>
				<td>e-mail</td>
				<td><input type="text" name="email"
				value="<?php
					if(isset($_GET['email'])){
						echo $_GET['email'];
					}
				 ?>">
					<?php
						if($email==""){
							echo $errorEmail;
						}
					 ?>
				</td>
			</tr>
			<tr>
				<td>Pitanje</td>
				<td><textarea name="pitanje" cols="30" rows="5" ></textarea>
				<?php
					if($pitanje==""){
						echo $errorPitanje;
					}
				 ?>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Posalji"></td>
			</tr>
		</table>

	</form>
</body>
</html>
