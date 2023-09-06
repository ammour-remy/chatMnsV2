<?php 
require_once "../connexion/connect.php";
include "../include/head.php"; 
include "../include/_protect.php";

// Requête SQL pour récupérer les données des utilisateurs
$sqlUser = "SELECT *
            FROM utilisateur
            INNER JOIN affiliation
            ON utilisateur.affiliationId = affiliation.affiliationId"; // Condition de filtrage sur utilisateurId
$requeteUser = $database->prepare($sqlUser); // On prépare la requête pour éviter les injections SQL
$requeteUser->execute(); // On execute la requête
$user = $requeteUser->fetchAll(); // Récupère les résultats de la requête

// Requête SQL pour récupérer les groupes
$sqlGroup = "SELECT *
             FROM groupe";
$requeteGroup = $database->prepare($sqlGroup);
$requeteGroup->execute();
$group = $requeteGroup->fetchAll();
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
            <h2>Administrateur</h2>
        </section>

        <section id="button">
            <button class="buttonAdmin">Groupe / Utilisateur</button>
        </section>

        <!-- GROUPE début -->

        <section id="group">
            <article>
                <button class="buttonAdmin">Créer un groupe</button>
            </article>

            <table>
                <thead>
                    <tr>
                        <th class="center">Nom du groupe</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
              
                <?php foreach($group as $row) { ?>
                
                <tbody>
                    <tr>
                        <td class="decalage"><?= $row['groupeTitre']; ?></td>
                        <td class="center"><a href="modificationGroupe.php?id=<?=$row['groupeId'] ?>"><img src="/assets/images/icones/modifierNoir.png" alt="Modification" title="Modification"></a></td>
                        <td class="center"><a href="suppressionGroupe.php?id=<?=$row['groupeId'] ?>"><img src="/assets/images/icones/echapNoir.png" alt="Suppression" title="Suppression"></a></td>
                    </tr>
                </tbody>

                <?php } ?>

            </table>
        </section>

        <!-- GROUPE fin -->

        <!-- UTILISATEUR début -->

        <section id="user" class="hidden">
            <article>
                <button class="buttonAdmin">Ajouter un membre</button>
            </article>

            <table>
                <thead>
                    <tr>
                        <th class="center">Nom</th>
                        <th class="center">Prénom</th>
                        <th class="center">Date de naissance</th>
                        <th class="center">Email</th>
                        <th class="center">Affiliation</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($user as $row) { ?>
                
                    <tr>
                        <td class="decalage"><?= $row['utilisateurNom']; ?></td>
                        <td class="decalage"><?= $row['utilisateurPrenom']; ?></td>
                        <td class="decalage"><?= $row['utilisateurDateNaissance']; ?></td>
                        <td class="decalage"><?= $row['utilisateurMail']; ?></td>
                        <td class="center"><?= $row['affiliationTitre']; ?></td>

                        <td class="center"><a href="modificationAdmin.php?id=<?=$row['utilisateurId'] ?>"><img src="/assets/images/icones/modifierNoir.png" alt="Modification" title="Modification"></a></td>
                        
                        <td class="center">
                            <a data-id-compte="<?=$row['utilisateurId'] ?>" class="suppression button">
                                <img src="/assets/images/icones/echapNoir.png" alt="Suppression" title="Suppression">
                            </a>
                        </td>
                    </tr>

                <?php } ?>

                    <div id="boiteDialogue" class="cache">
                        <p>
                            Êtes-vous sûr de vouloir supprimer le compte ?
                        </p>
                        <button id="confirmer">Confirmer</button>
                        <button id="annuler">Annuler</button>
                    </div>
                </tbody>
            </table>
        </section>

    <!-- UTILISATEUR fin -->

    </main>

	<footer>
        <?php include "../include/footer.php"; ?>
    </footer>
    <script src="../assets/scripts/js/admin.js"></script>
</body>
</html>
