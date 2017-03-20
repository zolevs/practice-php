
<?php

	if(isset($_POST['reg'])){
		echo "Dugme<br/>";
		$username_form 	= $_POST['username'];
		$password_form 	= $_POST['password'];
		$ponovi_form	= $_POST['ponovi'];
		$email_form 	= $_POST['email'];
		$ime_form 		= $_POST['ime'];
		$prezime_form 	= $_POST['prezime'];
		$dan_form 		= $_POST['dan'];
		$mesec_form		= $_POST['mesec'];
		$godina_form	= $_POST['godina'];

		$datum_form 	= $godina_form."-".$mesec_form."-".$dan_form;
		$datum 			= date($datum_form);

		echo "<br/>$username_form<br/>$password_form<br/>$email_form<br>$ime_form<br/>$prezime_form<br>$dan_form<br>$mesec_form<br>$godina_form<br/>$datum<br/>";

		$folder = "profil/slike/";
		// $folder = $folder.basename($_POST['profil']);
		// bilo je problema dokle nije stavljeno u zaglavlje forme enctype= .....
		$folder = $folder.basename($_FILES['profil']['name']);
		// print_r ($folder);
		$privremeni_naziv = $_FILES['profil']['tmp_name'];
		$originalni_naziv = $_FILES['profil']['name'];

		$delovi_naziva = pathinfo($originalni_naziv);
		// print_r($delovi_naziva);
		$ekstenzija = $delovi_naziva['extension'];

		$prvi=rand(1,100000);
		$drugi=rand(1,100000);
		$treci=rand(1,100000);
		// echo ("$prvi<br/>$drugi<br/>$treci");

		$slucajni_naziv = $prvi ."-". $drugi."-".$treci;

		$konacni_fajl = $slucajni_naziv.".".$ekstenzija;

		$velicina_slike = $_FILES['profil']['size'];
		$tip_slike = $_FILES['profil']['type'];

		$putanja = "profil/slike/".$konacni_fajl;

		echo "$folder <br/> $privremeni_naziv <br/> $originalni_naziv <br/> $ekstenzija <br/> $slucajni_naziv <br/> $konacni_fajl <br/> $putanja <br/> $velicina_slike <br/> $tip_slike <br/>";

		// provera dali je sifra uredu
		if($password_form==$ponovi_form){

			$korisnik = mysql_query("
					SELECT * FROM 'korisnici'
					WHERE 'username' = '$username_form'
					OR 'email' = '$email_form'
				");
			echo mysql_error();
			$brojac = mysql_num_rows($korisnik);
			if($brojac == 0){

				if (move_uploaded_file($privremeni_naziv,$putanja)) {
					echo "Kopirana slika";

					$prvi=rand(1,100000);
					$drugi=rand(1,100000);
					$treci=rand(1,100000);
					$slucajni_kod = $prvi ."-". $drugi."-".$treci;

					mysql_query("
						INSERT INTO 'korisnici'
						SET 'username'	= '$username_form',
							'password' 	= '$password_form',
							 'email' 	= '$email_form',
							 'ime' 		= '$ime_form',
							 'prezime' 	= '$prezime_form',
							 'datum' 	= '$datum',
							 'slika'	= '$putanja',
							 'code'		= '$slucajni_kod'
						");

				}else {
					echo "Nije uspelo kopiranje";
				}
			} else {
				echo "Greska. Korisnik postoji. Za ponovo odaberite <a href='index.php?opcija=registracija'> link";
			}
		} else {
			echo "Greska. Passwordi nisu isti.<br/> Za ponovo odaberite <a href='index.php?opcija=registracija'> link";
		}
		// provera sifre end
	} else {
 ?>
		<form action="index.php?opcija=registracija" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<th colspan="2">Registracija</th>
				</tr>
				<tr>
					<td>username</td><td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td>password</td><td><input type="password" name="password" required></td>
				</tr>
				<tr>
					<td>ponovi</td><td><input type="password" name="ponovi" required></td>
				</tr>

				<tr>
					<td>email</td><td><input type="text" name="email" required></td>
				</tr>
				<tr>
					<td>ime</td><td><input type="text" name="ime" required></td>
				</tr>
				<tr>
					<td>prezime</td><td><input type="text" name="prezime" required></td>
				</tr>
				<tr>
					<td>datum rodjenja</td>
					<td>
						<select name="dan">
						<?php
							for( $dan=1; $dan<=31; $dan++){
							?>
							<option value="<?php echo $dan; ?>"><?php echo $dan; ?></option>
							<?php
							}
							?>
						 ?>
						</select>
						<select name="mesec">
							<?php
								for ($mesec=1; $mesec<=12; $mesec++) {
									?>
							<option value="<?php echo $mesec; ?>"><?php echo $mesec; ?></option>
							<?php
								}
							?>
						</select>
						<select name="godina">
							<?php
								for ($godina=1930; $godina<=2000; $godina++){
							 ?>
							<option value="<?php echo $godina; ?>"><?php echo $godina; ?></option>
							<?php
							}
							?>
						</select>
					<!-- <input type="date" name="datum"> -->
					</td>
				</tr>
				<tr>
					<td>slika</td><td><input type="file" name="profil" accept="image/*" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="reg" value="Registruj se"></th>
				</tr>
			</table>
		</form>
<?php
}
 ?>

