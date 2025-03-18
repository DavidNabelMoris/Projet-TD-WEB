<?php
include("../db/db_connect.php");
include("../CRUD/CRUD_client.php") ;  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="">
        <title>client - S'inscrire</title>
		<link rel="stylesheet" href="style_co.css">
    </head>
	
	
    <body>
        <div class="form-container">
			<h2>Je m'inscris</h2>
			<!--  ------------------inscription------------------ -->
            <form action="inscription_client.php" method="post" class="form login">
			  
				<div class="form-group">
                  <input name="login" type="text" placeholder="Login" required>
				</div>
                <div class="form-group">
                  <input name="mdp" type="password" placeholder="Mot de passe" required>
                </div>
              
				<input type="submit" value="S'inscrire">
			   
            </form>
			<div class="inscription-btn">
				<a href="form_client.html">Se connecter</a>
				<a href="index.php">revenir à la page d'accueil</a>
			</div>
		</div>
    </body>
</html>

<?php
session_start();

if (isset($_POST["login"]) && isset($_POST["mdp"]) ){
	$login=$_POST["login"];
	$mdp=$_POST["mdp"];
	insert_user($conn, $login, $mdp);
	$_SESSION['login'] = $login;
	header("Location: profil_client.php");
}
?>