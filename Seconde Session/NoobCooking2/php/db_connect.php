<?php

$servername = "localhost";
$dbname = "arno";
$username = "root";
$password = "root";


try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
}