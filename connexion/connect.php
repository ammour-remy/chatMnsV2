<?php

try {
    $host = "localhost";
    $dbname = "chatmns";
    $username = "root";
    $userpwd = "";
    
    $database = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$username","$userpwd");	
} 

catch (Exception $e) {
     die ("Erreur : " . $e->getMessage());
}

?>