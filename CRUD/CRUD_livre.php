<<<<<<< HEAD
<?php
include("../db/db_connect.php") ; 
?>

<?php

function insert_livre($conn, $titre, $auteur, $nb_page, $id_client){
	$sql="INSERT INTO `livre` (`id`, `titre`, `auteur`, `nb_page`, `id_client`) VALUES (NULL, '$titre', '$auteur', '$nb_page', '$id_client');";
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
=======
<?php
include("../db/db_connect.php") ; 
?>

<?php

function insert_livre($conn, $titre, $auteur, $nb_page, $id_client){
	$sql="INSERT INTO `livre` (`id`, `titre`, `auteur`, `nb_page`, `id_client`) VALUES (NULL, '$titre', '$auteur', '$nb_page', '$id_client');";
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
>>>>>>> 4009fb4eae676317a7b9eb02737367a05a040e95
}