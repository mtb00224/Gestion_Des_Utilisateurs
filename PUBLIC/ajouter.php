<?php
 	include("../PUBLIC/header.html"); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ajouter-utilisateur</title>
	<link rel="stylesheet" type="text/css" href="ajouter.css?sshkjslkse">
</head>
<body>
	<center>
		<h2>Ajout d'un utilisateur</h2>
	</center>
	<center class="centre1">
		<form method="POST" action="../PRIVEE/ajouter.php">
			<label>Prénom</label><br>
			<input type="text" name="prenom" id="prenom"><br>
			<label>Nom</label><br>
			<input type="text" name="nom"><br>
			<label>Login</label><br>
			<input type="text" name="login"><br>
			<label>Password</label><br>
			<input type="password" name="mdp"><br>
			<input type="submit" value="Ajouter" id="envoie"><br>
		</form>
	</center>
</body>
</html>	
<?php include("../PUBLIC/footer.html"); ?>