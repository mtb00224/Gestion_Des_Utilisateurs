 <?php
 	include("header.html");
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=users",'root');
	} catch (PDOException $e) {
		echo "erreur de connexion ".$e->getMessage();
	}

	$rq = $bdd->query("SELECT * FROM utilisateurs");
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
		<div id="affichage" style="border: 2px solid green;display: none;">
			Ajout reussi avec success
		</div>
		<h3>Lister des utilisateurs</h3>
		<table border="2">
			<tr>
				<th>Prenom</th>
				<th>Nom</th>
				<th>Login</th>
				<th>Password</th>
				<th colspan="4">Action</th>
			</tr>

			<?php foreach ($rq as $user):?>
			<tr>
				<td><?php echo $user['prenom'] ?></td>
				<td><?php echo $user['nom'] ?></td>
				<td><?php echo $user['login'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td>
					<button>
						<a href="affiche.php?login=<?= $user['login'] ?>">Afficher</a>
					</button>
				<td>
				<td>
					<button>
						<a href="modifie.php?prenom=<?= $user['prenom'] ?>&nom=<?= $user['nom'] ?>&login=<?= $user['login'] ?>&mdp=<?= $user['password'] ?>">Modifier</a>
					</button>
				</td>
				<td>
					<button>
						<a href="supprime.php?login=<?= $user['login'] ?>">Supprimer</a>
					</button>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</center>
	<script type="text/javascript">
		if (prenom.value.length < 4) {
			alert("reieneeeee");
		}
	</script>
</body>
</html>
<?php 
	include("footer.html");
 ?>