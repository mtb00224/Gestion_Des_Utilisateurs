<?php
	include("header.html");
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=users","root");
	} catch (PDOException $e) {
		echo "Erreur d'accés de connexion dans la base de donée ".$e->getMessage();
	}
	$login = $_GET['login'];
	$rq = $bdd->prepare("DELETE FROM utilisateurs WHERE login = :login");
	$rq->execute(array(
		'login' => $login
	));

	header("location: index.php");
 ?>
<!-- 
	Cette page gere la suppression d'un utilisateurs en fonction du login recuperer par 
	la methode get et appliquer par la requete sql
  -->

