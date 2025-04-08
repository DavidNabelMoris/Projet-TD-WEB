<<<<<<< HEAD
<?php
session_start();
include "../db/db_connect.php"; 


if (isset($_POST['login']) && isset($_POST['mdp'])){
	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	
	if (empty($login)){
		header("Location: index.php?error=User is required");
		exit();
	}else if(empty($mdp)){
		header("Location: index.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM Client WHERE login='$login' AND mdp='$mdp'";
		
		$rs = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($rs);
		
		if ($row['login'] === $login && $row['mdp'] === $mdp){
			$_SESSION['login'] = $row['login'];
			$_SESSION['id'] = $row['id'];
			header("Location: profil_client.php");
			exit();
		}else{
			header("Location: connexion_client.html?error=Incorect User name or password");
			exit();
				
		}
	}
	
}else{
	header("Location: connexion_client.php");
	exit();
}			
=======
<?php
session_start();
include "../db/db_connect.php"; 


if (isset($_POST['login']) && isset($_POST['mdp'])){
	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	
	if (empty($login)){
		header("Location: index.php?error=User is required");
		exit();
	}else if(empty($mdp)){
		header("Location: index.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM Client WHERE login='$login' AND mdp='$mdp'";
		
		$rs = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($rs);
		
		if ($row['login'] === $login && $row['mdp'] === $mdp){
			$_SESSION['login'] = $row['login'];
			$_SESSION['id'] = $row['id'];
			header("Location: profil_client.php");
			exit();
		}else{
			header("Location: connexion_client.html?error=Incorect User name or password");
			exit();
				
		}
	}
	
}else{
	header("Location: connexion_client.php");
	exit();
}			
>>>>>>> 4009fb4eae676317a7b9eb02737367a05a040e95
?>