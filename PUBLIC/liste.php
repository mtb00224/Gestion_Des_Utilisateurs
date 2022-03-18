 <?php 
 	include("header.html");
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=users",'root');
	} catch (PDOException $e) {
		echo "erreur de connexion ".$e->getMessage();
	}
	$i = 0;
	$rq = $bdd->query("SELECT * FROM utilisateurs WHERE nom!=''");
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
		<h3>Voici la liste exacte des utilisateurs</h3>
		<table border="2" cellpadding="30">
			<th>Numero</th>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Login</th>
			<th>Password</th>

			<?php foreach ($rq as $user):?>
			<tr>
				<td><?php echo ++$i ?></td>
				<td><?php echo $user['prenom'] ?></td>
				<td><?php echo $user['nom'] ?></td>
				<td><?php echo $user['login'] ?></td>
				<td><?php echo $user['password'] ?></td>
			</tr>
			<?php endforeach ?>
			<tr>
				<th colspan="4">Totale</th>
				<th><?php echo $i ?></th>
			</tr>
		</table>
	</center>
</body>
</html>
<?php 
	include("footer.html");
 ?>