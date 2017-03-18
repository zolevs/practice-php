<?php

	if(isset($_POST['reg'])){
		echo "Dugme<br/>";
		$username_form 	= $_POST['username'];
		$password_form 	= $_POST['password'];
		$email_form 	= $_POST['email'];
		$ime_form 		= $_POST['ime'];
		$prezime_form 	= $_POST['prezime'];
		$dan_form 		= $_POST['dan'];
		$mesec_form		= $_POST['mesec'];
		$godina_form	= $_POST['godina'];


		echo "<br/>$username_form<br/>$password_form<br/>$email_form<br>$ime_form<br/>$prezime_form<br>$dan_form<br>$mesec_form<br>$godina_form<br/>";
	} else {
 ?>
		<form action="index.php?opcija=registracija" method="POST">
			<table>
				<tr>
					<th colspan="2">Registracija</th>
				</tr>
				<tr>
					<td>username</td><td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>password</td><td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>email</td><td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>ime</td><td><input type="text" name="ime"></td>
				</tr>
				<tr>
					<td>prezime</td><td><input type="text" name="prezime"></td>
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
					<td>slika</td><td><input type="file" name="profil"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="reg" value="Registruj se"></th>
				</tr>
			</table>
		</form>
<?php
}
 ?>

