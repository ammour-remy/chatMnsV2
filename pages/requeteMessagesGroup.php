<?php 
require_once "../connexion/connect.php"; // Récupère le fichier de connexion
session_start();
require_once "../include/_protect.php"; // Récupère le fichier protect

// Récupérer l'ID du groupe envoyé par la requête AJAX
$groupeId = $_GET['groupeId'];

// echo $groupeId;
// Faites la requête dans votre base de données en utilisant l'ID du groupe
// Exemple :
$sql = "SELECT * FROM groupe 
        INNER JOIN associe 
        ON groupe.groupeId = associe.groupeId 
        INNER JOIN messages 
        ON messages.messageId = associe.messageId 
        INNER JOIN utilisateur 
        ON messages.utilisateurId = utilisateur.utilisateurId 
        WHERE associe.groupeId= :groupeId
        ORDER BY messages.messageDate ASC, messages.messageHeure ASC";

$requete = $database->prepare($sql);
$requete->execute([':groupeId' => $groupeId]);
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

// Traitez les résultats de la requête ici si nécessaire

// Vous pouvez renvoyer une réponse JSON si vous le souhaitez
$_SESSION['groupeid'] = $groupeId;
header('Content-Type: application/json');

echo json_encode($resultats);

?>
