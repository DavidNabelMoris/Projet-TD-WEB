<?php
include("../db/db_connect.php") ; 
?>

<?php

function insert_livre($conn, $titre, $auteur, $nb_page, $id_client){
	$sql="INSERT INTO `livre` (`id`, `titre`, `auteur`, `nb_page`, `id_client`) VALUES (NULL, '$titre', '$auteur', '$nb_page', '$id_client');";
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
}