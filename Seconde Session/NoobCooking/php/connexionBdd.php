<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
// Connexion à la BDD avec le PDO
// Permet de gérer les erreurs de connexion
try {
    $bdd = new PDO('mysql:host=localhost;dbname=noobcooking;charset=utf8', 'root', 'root');
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}
?>
</body>
</html>
