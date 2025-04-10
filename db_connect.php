<?php
define('SERVEUR_BD',getenv('SERVEUR_BD'))
define('LOGIN_BD',getenv('LOGIN_BD'))
define('PASS_BD',getenv('PASS_BD'))
define('NOM_BD',getenv('NOM_BD'))
define('PASS_ROOT_BD',getenv('PASS_ROOT_BD'))
define('PORT_WEB',getenv('PORT_WEB'))
define('PORT_PHPMYADMIN ',getenv('PORT_PHPMYADMIN '))

$servername = "host.docker.internal"; 
$username = "userbd";
$password = "1234";
$dbname   = "mabase";




$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

