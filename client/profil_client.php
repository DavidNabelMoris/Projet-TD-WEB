<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['login'])){
	$_SESSION['connect']=True;
	$_SESSION['page']="client/profil_client.php";
	
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>client - Accueil</title>
		<link rel="stylesheet" href="style_pro.css">
	</head>

	<body>

	<h1> Bonjour <?php echo($_SESSION['login']); ?><h1>
	
	
	<a class="login" href="deco_client.php"> Se déconnecter</a>
	<a class="login" href="../index.php"> Retour à la page d'accueil</a>
	<a class="login" href="../livre/inscription_livre.php"> enregistrer un livre</a>
	<a class="login" href="../livre/voir_livre.php"> voir mes livres</a>
			
	<footer>
        <p>&copy; 2025 Concession Automobile | Tous droits réservés</p>
    </footer>

	</body>
</html>

<?php
}else{
	header("Location: index.php");
	exit();
	
}
?>