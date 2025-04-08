<<<<<<< HEAD
<?php
include("../db/db_connect.php") ; 
?>

<?php

function insert_user($conn, $login, $mdp){
	$sql="INSERT INTO `client` (`id`, `login`, `mdp`) VALUES (NULL, '$login', '$mdp');";
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
}

function update_user($conn, $id, $login, $mdp){
	$sql="UPDATE `Client` SET login='$login',mdp='$mdp' WHERE id = $id" ; 
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
}

function delete_user($conn, $id){
	$sql="DELETE FROM `Client` WHERE id=$id" ; 
	$res=mysqli_query($conn, $sql) ; 
	return $res ;
}


function select_user($conn, $id){
	$sql="SELECT * FROM `Client` WHERE id=$id" ; 
	if($res=mysqli_query($conn, $sql)){
		$res=mysqli_fetch_assoc($res);
	}
	return $res;
}
function select_id($conn, $login){
	$sql="SELECT 'id' FROM `Client` WHERE login=$login" ; 
	if($res=mysqli_query($conn, $sql)){
		$res=mysqli_fetch_assoc($res);
	}
	return $res;
}
=======
<?php
include("../db/db_connect.php") ; 
?>

<?php

function insert_user($conn, $login, $mdp){
	$sql="INSERT INTO `client` (`id`, `login`, `mdp`) VALUES (NULL, '$login', '$mdp');";
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
}

function update_user($conn, $id, $login, $mdp){
	$sql="UPDATE `Client` SET login='$login',mdp='$mdp' WHERE id = $id" ; 
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
}

function delete_user($conn, $id){
	$sql="DELETE FROM `Client` WHERE id=$id" ; 
	$res=mysqli_query($conn, $sql) ; 
	return $res ;
}


function select_user($conn, $id){
	$sql="SELECT * FROM `Client` WHERE id=$id" ; 
	if($res=mysqli_query($conn, $sql)){
		$res=mysqli_fetch_assoc($res);
	}
	return $res;
}
function select_id($conn, $login){
	$sql="SELECT 'id' FROM `Client` WHERE login=$login" ; 
	if($res=mysqli_query($conn, $sql)){
		$res=mysqli_fetch_assoc($res);
	}
	return $res;
}
>>>>>>> 4009fb4eae676317a7b9eb02737367a05a040e95
?>