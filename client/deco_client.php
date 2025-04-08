<<<<<<< HEAD
<?php
  // Initialiser la session
  session_start();
  
  // Détruire la session.
  if(session_destroy())
  {
    // Redirection vers la page de connexion
    header("Location: ../index.php");
  }
=======
<?php
  // Initialiser la session
  session_start();
  
  // Détruire la session.
  if(session_destroy())
  {
    // Redirection vers la page de connexion
    header("Location: ../index.php");
  }
>>>>>>> 4009fb4eae676317a7b9eb02737367a05a040e95
?>