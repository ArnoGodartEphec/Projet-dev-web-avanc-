<?php
// Variables relatives à la DB en local
$servername = "localhost";
$dbname = "arno";
$username = "root";
$password = "root";


// Création du PDO
try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Si erreur de connexion, afficher un message
} catch (PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
}