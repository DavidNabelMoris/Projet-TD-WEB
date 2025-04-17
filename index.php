<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="up">
        <img src="logo" alt="logo">
        <h1 class="Titre">Mes Livres</h1>
        <a href="client/form_client.html">Se connecter</a>
		<a href="client/inscription_client.php">S'inscrire</a>
    </section>

    <body>
        

        <section class="main">
            <h2>ma bibliothèque</h2>
            <?php include "select_livre.php" ?>
        </section>

    </body>

</body>
</html>