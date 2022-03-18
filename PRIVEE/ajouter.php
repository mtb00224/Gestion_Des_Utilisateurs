<?php 
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=users","root");
	} catch (PDOException $e) {
		echo "Erreur de connexion ".$e->getMessage();
	}
	
	if(isset($_POST['prenom'],$_POST['nom'],$_POST['login'],$_POST['mdp']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['login']) && !empty($_POST['mdp'])){
		$rq = $bdd->prepare("INSERT INTO utilisateurs(prenom,nom,login,password) VALUES(?,?,?,?)");
		$rq->execute(array($_POST['prenom'],$_POST['nom'],$_POST['login'],$_POST['mdp']));
		header("location: ../PUBLIC/index.php");
		die();
	}else{
		header("location: ../PUBLIC/ajouter.php");
		echo "Veuillez remplir les informations ou dégagez";
	}
 ?>