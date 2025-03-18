<?php
session_start();
	include("../db/db_connect.php");
	include("../CRUD/CRUD_livre.php");
	
	if (isset($_POST["titre"]) && isset($_POST["auteur"]) && isset($_POST["nb_page"])){
		$titre=$_POST["titre"];
		$auteur=$_POST["auteur"];
		$nb_page=$_POST["nb_page"];
		insert_livre($conn, $titre, $auteur, $nb_page, $_SESSION["id"]);
		echo("votre livre a été enregistrer");
	}
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <title>Enregistrer vos livres</title>
		<link rel="stylesheet" href="../client/style_co.css">
    </head>
	
	
    <body>
        <div class="form-container">
			<h2>Je m'inscris</h2>
			<!--  ------------------inscription------------------ -->
            <form action="inscription_livre.php" method="post" class="form login">
			  
				<div class="form-group">
                  <input name="titre" type="text" placeholder="titre" required>
				</div>
                <div class="form-group">
                  <input name="auteur" type="text" placeholder="auteur" required>
                </div>
                <div class="form-group">
                  <input name="nb_page" type="text" placeholder="nb_page" required>
                </div>
              
				<input type="submit" value="S'inscrire">
			   
            </form>
			<div class="inscription-btn">
				<a href="../client/profil_client.php">revenir sur le profil</a>
				<a href="../index.html">revenir à la page d'accueil</a>
			</div>
		</div>
    </body>
</html>