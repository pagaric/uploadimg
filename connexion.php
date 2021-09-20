<?php

function dbConnect()
{
    // Déclaration des variables 
    $serverName = 'localhost';
    $dbName = 'uploadimg';
    $userName = 'root';
    $pwd = '';
    $dbConn = null;

    // connexion à la base de données 
    try {
        $dbConn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=UTF8", $userName, $pwd);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    return $dbConn;
}
