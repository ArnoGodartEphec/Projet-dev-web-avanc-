<?php
include 'C:/MAMP/htdocs/NoobCooking2/php/db_connect.php';


$requete = $dbh->prepare('SELECT * FROM recette');
$requete -> execute();

$retour= $requete -> fetchAll(PDO::FETCH_ASSOC);

echo json_encode($retour);



