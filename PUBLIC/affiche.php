<?php
	include("header.html");
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=users","root");
	} catch (PDOException $e) {
		echo "Erreur d'accés de connexion dans la base de donée ".$e->getMessage();
	}
	$login = $_GET['login'];
	$rq = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = :login");
	$rq->execute(array(
		'login' => $login
	));
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>utilisateurs</title>
</head>
<body>
	<center>
		<h3>Informations Individuelles</h3>
		<table border="2" cellpadding="30" >
			<th>Prenom</th>
			<th>Nom</th>
			<th>Login</th>
			<th>Password</th>
			<?php foreach ($rq as $user):?>
			<tr>
				<td><?php echo $user['prenom'] ?></td>
				<td><?php echo $user['nom'] ?></td>
				<td><?php echo $user['login'] ?></td>
				<td><?php echo $user['password'] ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</center>
</body>
</html>
<?php 
	include("footer.html");
 ?>
