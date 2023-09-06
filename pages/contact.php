<?php 
require_once "../connexion/connect.php"; // Récupère le fichier de connexion
include "../include/head.php"; // Récupère le fichier "head"
require_once "../include/_protect.php"; // Récupère le fichier protect

if($_SESSION['connected'] == 'ok') {

    // On fait la requête SQL pour récupérer les données de l'utilisateur
    $sql = "SELECT * 
            FROM contact 
            INNER JOIN utilisateur 
            ON utilisateur.utilisateurId = contact.utilisateurIdAPourContact
            WHERE utilisateurIdAPourContact = :userid
        OR utilisateurIdAEteChoisi = :userid"; // Condition de filtrage sur utilisateurId
    $requete = $database->prepare($sql); // On prépare la requête pour éviter les injections SQL
    $requete->execute([':userid'=>$_SESSION['userid']]); // On execute la requête
    $listeContact = $requete->fetchAll(PDO::FETCH_ASSOC); // Récupère les résultats de la requête, PDO::FETCH_ASSOC: retourne un tableau indexé
}
?>

<body>
	<header>
        <?php include "../include/header.php"; ?>
    </header>
    
    <aside id="groupMenu" class="hidden">
        <?php include "../include/asideGroupeMenu.php"; ?>
    </aside>

    <aside id="subMenu" class="hidden">
        <?php include "../include/asideSubMenu.php"; ?>
    </aside>
    
	<main>
		<section id="actuallyTitle">
            <h2>Contact</h2>
        </section>
        <section id="header">
            <article>
                <button><a href="#">Ajouter</a></button>
            </article>
        </section>
        <section id="contact">
            
            <!-- Début de la boucle -->
            <?php foreach($listeContact as $row) {
                if($row['utilisateurIdAEteChoisi'] != $_SESSION['userid']) {

                    
                    $result = $row['utilisateurIdAEteChoisi'];
                    $sqlContact = "SELECT *
                               FROM utilisateur
                               INNER JOIN statut
                               ON statut.statutId = utilisateur.statutId
                               WHERE utilisateurId = :contactid";
                $requeteContact = $database->prepare($sqlContact);
                $requeteContact->execute([':contactid'=>$result]);
                $contact = $requeteContact->fetch();
            }
               elseif($row['utilisateurIdAEteChoisi'] == $_SESSION['userid']) {

                    
                    $result = $row['utilisateurIdAPourContact'];
                    $sqlContact = "SELECT *
                               FROM utilisateur
                               INNER JOIN statut
                               ON statut.statutId = utilisateur.statutId
                               WHERE utilisateurId = :contactid";
                $requeteContact = $database->prepare($sqlContact);
                $requeteContact->execute([':contactid'=>$result]);
                $contact = $requeteContact->fetch();
            }
            ?>  
            <article> 
                <ul>
                    <li>
                        <img src="../assets/images/icones/silouhetteBleue.png" alt="icone photo" title="photo de profil">
                    </li>
                    <li>
                        <p><?= $contact["utilisateurNom"]." ". $contact["utilisateurPrenom"]; ?></p> 
                        <p><?= $contact["statutTitre"]; ?></p>
                    </li>
                </ul>
                <button>
                    <img src="../assets/images/icones/chatBulleNoir.png" alt="icone envoyer un message" title="envoyer un message">
                </button>
                </article>
                <?php }?>
                <!-- Fin de la boucle -->

        </section>
	</main>
    
	<footer>
        <?php include "../include/footer.php"; ?>
    </footer>
</body>
</html>
