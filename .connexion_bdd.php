<?php
// Fichier template pour la connexion a la bases de données
$host = '';
$dbname = '';
$user = '';
$pass = '';

try {
    $db =new PDO("mysql:host=$host;dbname=$dbname",$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} 
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
?>