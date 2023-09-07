<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        
    <?php

    
    $page = basename($_SERVER['PHP_SELF']);
    
    switch($page) {
        
        case 'index.php':
                session_start();
            echo '<link rel="stylesheet" type="text/css" href="assets/css/general.css">';
            echo '<meta name="keywords" content="chat MNS">';
            echo '<meta name="description" content="Accueil, connexion à Chat MNS"/>';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<title>Connexion à Chat MNS</title>';
            break;
            
        case 'chatMns.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/header.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/asides.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/mainGeneral.css">';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<meta name="description" content="Page de chat de Chat MNS"/>';
            echo '<title>Chat MNS</title>';
            break;
                
        case 'contact.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/header.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/asides.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/contact.css">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            
            echo '<meta name="description" content="Contact de Chat MNS"/>';
            echo '<title>Contact</title>';
            break;
                    
        case 'inscription.php':
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/general.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/inscription.css">';
            echo '<meta name="description" content="Inscription à Chat MNS"/>';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<title>Inscription</title>';
            break;
                        
        case 'motDePasseOublie.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/general.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/mot_de_passe_oublie.css">';
            echo '<meta name="description" content="Mot de passe Chat MNS oublié"/>';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<title>Mot de passe oublié</title>';
            break;
                            
        case 'nouveauMotDePasse.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/general.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/nouveau_mot_de_passe.css">';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<meta name="description" content="Création d\'un nouveau mot de passe"/>';
            echo '<title>Nouveau mot de passe</title>';
            break;
                                
        case 'parametre.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/header.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/asides.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/parametre.css">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<link rel="icon" type="image/png" href="../assets/images/LogoChatMNS.png"/>';
            echo '<meta name="description" content="Paramètre de Chat MNS"/>';
            echo '<title>Paramètre</title>';
            break;
                                    
        case 'profil.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/header.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/asides.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/profil.css">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            echo '<meta name="description" content="Profil personnel du site Chat MNS"/>';
            echo '<title>Profil</title>';
            break;
                                        
        case 'conditionGeneraleUtilisation.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/header.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/asides.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/conditionGeneraleUtilisation.css">';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<meta name="description" content="Condition générale d\'tilisation du site Chat MNS"/>';
            echo '<title>Condition générale d\'tilisation</title>';
            break;
                                            
        case 'planning.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/header.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/asides.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
            echo '<link rel="stylesheet" href="../assets/scripts/fullcalendar/core/main.css">';
            echo '<link rel="stylesheet" href="../assets/scripts/fullcalendar/daygrid/main.css">';
            echo '<link rel="stylesheet" href="../assets/scripts/fullcalendar/timegrid/main.css">';
            echo '<link rel="stylesheet" href="../assets/css/planning.css">';
            echo '<link rel="stylesheet" href="../assets/css/interaction/main.css">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js"></script>';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css">';
            echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.js"></script>';
        
            echo '<title>Calendrier</title>';
            break;
                                                
        case 'mentionsLegales.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/header.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/asides.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
            echo '<link rel="stylesheet" type="text/css" href="../assets/css/mentionslegales.css">';
            echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
            echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
            echo '<meta name="description" content="Mentions légales personnel du site Chat MNS"/>';
            echo '<title>Mentions légales</title>';
            break;
            case 'admin.php':
                session_start(); // Permet de démarrer une session ou restaurer un session exitante PHP pour l'utilisateur
                echo '<link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">';
                echo '<link rel="stylesheet" type="text/css" href="../assets/css/header.css">';
                echo '<link rel="stylesheet" type="text/css" href="../assets/css/asides.css">';
                echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
                echo '<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">';
                echo '<link rel="icon" href="href="../assets/images/favicon.ico" />';
                echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
                echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">';
                echo '<meta name="description" content="Mentions légales personnel du site Chat MNS"/>';
                echo '<title>Mentions légales</title>';
                break;
    } ?>

</head>
