<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- balise permettant l'ajout du responsive de Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ne passe pas à W3C permet de s'assurer qu'il utilise la dernière version du moteur de rendu-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <title>Noob Cooking</title>
</head>
<body>
<!-- Bar de navigation -->
<!-- Inclusion du fichier barreNavigation.php -->
<?php include('barreNavigation.php'); ?>

<!-- Header -->
<!-- Inclusion du fichier header.php -->
<?php include('header.php'); ?>

<!-- Recette à la une -->
<!-- Inclusion du fichier recetteStar.php -->
<?php include('recettesFaciles.php'); ?>

<!-- Footer -->
<?php include('footer.php') ?>

</body>
</html>