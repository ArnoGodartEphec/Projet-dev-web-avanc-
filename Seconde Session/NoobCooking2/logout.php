  
<?php
session_start();
session_unset();        // Detruit les variables entrées lors de la connexion
session_destroy();      // Detruit la session
header("location:index.php");   // Recharge la page index.php
exit();