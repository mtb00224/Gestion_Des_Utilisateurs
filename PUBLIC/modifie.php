<?php 
	include("header.html");
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=users","root");
	} catch (PDOException $e) {
		echo "Erreur d'accés de connexion dans la base de donée ".$e->getMessage();
	}
	$ancienPrenom = $_GET['prenom'];
	$ancienNom = $_GET['nom'];
	$ancienLogin = $_GET['login'];
	$ancienMdp = $_GET['mdp'];

	if(isset($_POST) && !empty($_POST)){
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$login = $_POST['login'];
		$mdp = $_POST['mdp'];

		$rq = $bdd->prepare("UPDATE `utilisateurs` SET `prenom`='{$prenom}', `nom`='{$nom}', `login`='{$login}', `password`='{$mdp}' where `login` = :login ");
		$rq->execute(array(
			'login' => $ancienLogin
		));

		header("location: index.php");

		// $req = $bdd->prepare("UPDATE utilisateurs SET login = :login");
  //       $req->bindParam(':login', $login, PDO::PARAM_VARCHAR);
  //       $req->execute();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ajouter-utilisateur</title>
	<link rel="stylesheet" type="text/css" href="ajouter.css">
</head>
<body>
	<center>
		<h2>Ajout d'un utilisateur</h2>
	</center>
	<center class="centre1">
		<form method="POST" action="">
			<label>Prénom</label><br>
			<input type="text" name="prenom" value="<?php echo $ancienPrenom ?>"><br>
			<label>Nom</label><br>
			<input type="text" name="nom" value="<?php echo $ancienNom ?>"><br>
			<label>Login</label><br>
			<input type="text" name="login" value="<?php echo $ancienLogin ?>"><br>
			<label>Password</label><br>
			<input type="password" name="mdp" value="<?php echo $ancienMdp ?>"><br>
			<input type="submit" value="Modifier"><br>
		</form>
	</center>
</body>
</html>
<?php 
	include("footer.html");
?>