<!DOCTYPE html>
<html>
<?php include("Base.html");?>
<article>
	<div>
	<form method="post" action="Contact.php">
		<label for="pseudo">Pseudo</label>
		<input type="text" name="pseudo" required/>
		<label for="adresse">Adresse email</label>
		<input type="email" name="adresse" required/>
		<label for="telephone">Numéro de téléphone</label>
		<input type="text" name="telephone"/>
		<label for="Objet">Objet du message</label>
		<select name="Objet">
			<option value="Bug" selected>Bug</option>
			<option value="Amelioration">Amélioration</option>
			<option value="Demande">Demande</option>
			<option value="Plainte">Plainte due à une épilepsie</option>
			<option value="Autre">Autre</option>
		</select>
		<input type="radio" name="visite" value="1"/>Première Visite
		<input type="radio" name="visite" value="2"/>Visites multiples
		<textarea name="message" rows="10" cols="30" required>
Ecrivez votre message ici.
		</textarea>
		<input type="submit"/>
	</form>
<?php
	$pseudo = $_POST['pseudo'];
	echo "Pseudo:".$pseudo;
?>
<br/>
<?php
	$message = $_POST['message'];
	echo "message envoyé:".$message;
?>
	</div>
	
</article>
</html>

