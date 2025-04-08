<?php
include 'db_connect.php';

$query = "SELECT * FROM livre"; 

$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo('<section "main-data">');
    echo("<img src='img/" . $row['titre'].".jpg' alt='logo'>");
    echo("<p>" . $row["titre"] ."</p>" .  "<br>");
    echo("<p>" . $row["auteur"] ."</p>" .  "<br>");
    echo("<p>" . $row["nb_page"] . "</p>" . "<br>");
    echo("</section>");
}


?>