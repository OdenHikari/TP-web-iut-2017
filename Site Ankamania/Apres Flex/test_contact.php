<?php include("hearder.html"); ?>

<main>
<header><h2>Contact</h2></header>
				<form method="post" action="test_contact.php">
					<p>
						<label for="pseudo">Pseudo: </label>
						<input type="text" name="pseudo" id="pseudo" required />
					</p>
					<p>
						<label for="email">Adresse mail: </label>
						<input type="mail" name="mail" id="mail" required />
					</p>
					<p>
						<label for="tel">Téléphone: </label>
						<input type="tel" name="tel" id="tel" required />
					</p>
					<select name="avis">
						<option value="bug">Il y a un bug</option>
						<option value="amelioration">Je propose une amélioration</option>
						<option value="demande">Je veux demander quelquechose</option>
					</select>
					<br/>
					<textarea name="message" rows="20" cols="40">
					Qu'avez-vous à nous dire ?
					</textarea>
					<br/>
					<input type="radio" name="visite" value="premiere" /> C'est ma première visite
					<br/>
					<input type="radio" name="visite" value="!premiere" /> Ce n'est pas ma première visite
					<br/>
					<input type="submit"  />
				</form>
</main>				
<?php include("footer.html"); ?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$pseudo = $_POST["pseudo"];
	echo "le pseudo est : " . $pseudo . "</br>";
	$mail = $_POST["mail"];
	echo "le mail est : " . $mail . "</br>";
	$tel = $_POST["tel"];
	echo "le tel est : " . $tel . "</br>";
	$avis = $_POST["avis"];
	echo "le avis est : " . $avis . "</br>";
	$message = $_POST["message"];
	echo "le message est : " . $message . "</br>";
	$visite = $_POST["visite"];
	echo "le visite est : " . $visite . "</br>";
}


?>
