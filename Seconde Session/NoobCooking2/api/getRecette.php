<?php
include '../php/db_connect.php';
// API permettant d'afficher les recettes ajoutées dans la section verte

$requete = $dbh->prepare('SELECT * FROM recette');
$requete -> execute();

$retour= $requete -> fetchAll(PDO::FETCH_ASSOC);

echo json_encode($retour);



