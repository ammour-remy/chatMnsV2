<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    
    <?php
    $page = basename($_SERVER['PHP_SELF']);
    $commonStylesheets = '
        <link rel="stylesheet" type="text/css" href="../assets/css/interfaceGenerale.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/header.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/asides.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
        <link rel="icon" href="../assets/images/favicon.ico">
    ';
    
    $additionalStylesheets = '';

    switch ($page) {
        case 'index.php':
            $additionalStylesheets = '
                <link rel="stylesheet" type="text/css" href="assets/css/general.css">
                <meta name="keywords" content="chat MNS">
                <meta name="description" content="Accueil, connexion à Chat MNS">
                <title>Connexion à chat MNS</title>
            ';
            break;
        
        case 'chatMns.php':
            $additionalStylesheets = '
                <link rel="stylesheet" type="text/css" href="../assets/css/mainGeneral.css">
                <meta name="description" content="Page principale de Chat MNS">
                <title>Chat MNS</title>
            ';
            break;
        
        case 'contact.php':
            $additionalStylesheets = '
                <link rel="stylesheet" type="text/css" href="../assets/css/contact.css">
                <meta name="description" content="Contact de Chat MNS">
                <title>Contact</title>
            ';
            break;
        
        case 'inscription.php':
            $additionalStylesheets = '
                <link rel="stylesheet" type="text/css" href="../assets/css/general.css">
                <link rel="stylesheet" type="text/css" href="../assets/css/inscription.css">
                <meta name="description" content="Inscription à Chat MNS">
                <title>Inscription</title>
            ';
            break;
        
        case 'motDePasseOublie.php':
            $additionalStylesheets = '
                <link rel="stylesheet" type="text/css" href="../assets/css/general.css">
                <link rel="stylesheet" type="text/css" href="../assets/css/mot_de_passe_oublie.css">
                <meta name="description" content="Mot de passe Chat MNS oublié">
                <title>Mot de passe oublié</title>
            ';
            break;
        
        case 'nouveauMotDePasse.php':
            $additionalStylesheets = '
                <link rel="stylesheet" type="text/css" href="../assets/css/general.css">
                <link rel="stylesheet" type="text/css" href="../assets/css/nouveau_mot_de_passe.css">
                <meta name="description" content="Création d\'un nouveau mot de passe">
                <title>Nouveau mot de passe</title>
            ';
            break;
        
        case 'parametre.php':
            $additionalStylesheets = '
                <link rel="stylesheet" type="text/css" href="../assets/css/parametre.css">
                <link rel="icon" type="image/png" href="../assets/images/LogoChatMNS.png">
                <meta name="description" content="Paramètre de Chat MNS">
                <title>Paramètre</title>
            ';
            break;
        
        case 'profil.php':
            $additionalStylesheets = '
                <link rel="stylesheet" type="text/css" href="../assets/css/profil.css">
                <meta name="description" content="Profil personnel du site Chat MNS">
                <title>Profil</title>
            ';
            break;
    }

    echo $commonStylesheets . $additionalStylesheets;
    ?>
</head>