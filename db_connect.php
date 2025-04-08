<<<<<<< HEAD
<?php
$servername = "host.docker.internal"; 

$username = "userbd";
$password = "1234";
$dbname   = "mabase";




$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

=======
<?php
$servername = "host.docker.internal"; 

$username = "userbd";
$password = "1234";
$dbname   = "mabase";




$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

>>>>>>> 4009fb4eae676317a7b9eb02737367a05a040e95
