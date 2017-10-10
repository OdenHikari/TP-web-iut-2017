<!DOCTYPE html>
<html>
<head>
	<title>Ankamania</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="basis.css" type="text/css" media="all"/>
</head>

<body>
	<div id="social">
		<div class="social"><a href="https://www.facebook.com/AnkaMania-1091484077654277/"><img src="face.png" width=100%/></a></div>
		<div class="social"><a href="https://twitter.com/AnkaKappa"><img src="twee.png" width=100%><a href="compte twee a créer"></a></img></div>
	</div>
	<div class="head">
		<h1>Ankamania</h1>	
		<nav class="borderau">
			<div class="menu"><a href="ankamania.html">Accueil</a></div>
			<div class="menu"><a href="bios.html">Biographies</a></div>
			<div id="cache" class="menu"><a>Galerie</a>
				<section class="sm">
					<div class="menu"><a href="saison3.html">Vidéos</a></div>
					<div><a href="galerie.html">Images</a></div>
				</section>
			</div>
		</nav>
	</div>
	<br/><br/>
	<div class="sac1">
		<aside class="box" id="element1"><h2>resumé</h2>
			<ul>
				<li>Episode 1</li>
				<li>Episode 2</li>
				<li>Episode 3</li>
				<li>Episode 4</li>
				<li>Episode 5</li>
				<li>Episode 6</li>
			</ul>
		</aside>
		<section  id="element2">
			<div class="box"><header><h2>Contact</h2></header>
				<form method="post" action="contact.php">
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
			</div>
		</section>
	</div>
	<footer>
		<a href="ankamania.html">Retour à l'accueil</a>
	</footer>
</body>

</html>





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