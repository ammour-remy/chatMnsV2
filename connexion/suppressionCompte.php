<?php
require_once "../connexion/connect.php";
include "../include/head.php"; 
include "../include/_protect.php";


   // Pour archiver
   $sql = "UPDATE utilisateur 
           SET isArchive = 1
           WHERE utilisateurId = :utilisateurId";
   $archive = $database->prepare($sql);
   $archive->execute([":utilisateurId" => $_SESSION["userid"]]);

   // Pour rendre l'utilisateur anonyme
   $sqlAnonyme = "UPDATE utilisateur
                  SET utilisateurNom = 'utilisateur', utilisateurPrenom = 'utilisateur', utilisateurDateNaissance = '0000-00-00', utilisateurImageProfil = 'default.jpg', utilisateurMotDePasse = '', utilisateurMail = 'utilisateur'
                  WHERE utilisateurId = :utilisateurId";
   $anonyme = $database->prepare($sqlAnonyme);
   $anonyme->execute([":utilisateurId" => $_SESSION['userid']]);

   header("Location: /index.php");
   exit;