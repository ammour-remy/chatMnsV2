<?php
require_once "../connexion/connect.php"; // Récupère le fichier de connexion
session_start();
require_once "../include/_protect.php"; // Récupère le fichier protect

// Récupérer les données de session
$sessionData = array(
  'idSession' => $_SESSION['userid'],
  // Ajoutez d'autres variables de session que vous souhaitez récupérer
);

// Renvoyer les données de session au format JSON
header('Content-Type: application/json');
echo json_encode($sessionData);
?>