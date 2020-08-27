<?php
include 'C:/MAMP/htdocs/NoobCooking2/php/db_connect.php';
// API permettant d'ajouter une recette, htmlspecialchars - Permet de convertir les caractères spéciaux en entités HTML

$nom= trim (htmlspecialchars($_POST['nom']));
$titre = trim (htmlspecialchars($_POST['titre']));
$recette = trim (htmlspecialchars($_POST['recette']));
$id=$_POST['id'];

// Si l'user ne s'est pas enregistré
if($id==0){
    $sql = '
    INSERT INTO recette (nom,titre,description)
        VALUES (?,?,?)';

    $sth = $dbh->prepare($sql);
    $sth->execute([$nom, $titre,$recette]);

// Si l'user s'est enregistré, l'id du user est relié à la recette qu'il a posté
}else{

    $sql = '
    INSERT INTO recette (nom,titre,description,id_user)
        VALUES (?,?,?,?)';

    $sth = $dbh->prepare($sql);
    $sth->execute([ $nom, $titre,$recette,$id]);

}


// Message de retour
$retour='la recette a été ajoutée.';

echo json_encode($retour);