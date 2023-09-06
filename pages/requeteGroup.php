<?php 
require_once "../connexion/connect.php"; // Récupère le fichier de connexion
session_start();
require_once "../include/_protect.php"; // Récupère le fichier protect
if($_SESSION['connected'] == 'ok') {

    // On fait la requête SQL pour récupérer les données de l'utilisateur
    $sql = "SELECT *
    		FROM utilisateur
    		INNER JOIN affilie
    		ON utilisateur.utilisateurId = affilie.utilisateurId
    		INNER JOIN groupe
    		ON affilie.groupeId = groupe.groupeId
    		WHERE utilisateur.utilisateurId = :userid"; // Condition de filtrage sur utilisateurId
    $requete = $database->prepare($sql); // On prépare la requête pour éviter les injections SQL
    $requete->execute([':userid'=>$_SESSION['userid']]); // On execute la requête
	$groupe = $requete->fetchAll(PDO::FETCH_ASSOC); // Récupère les résultats de la requête

     // Renvoyer les données en tant que réponse JSON
     header('Content-Type: application/json');
     echo json_encode($groupe);
     
}
?>
