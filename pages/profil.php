<?php 
require_once "../connexion/connect.php"; // Récupère le fichier de connexion
include "../include/head.php"; // Récupère le fichier "head"
require_once "../include/_protect.php"; // Récupère le fichier protect

if($_SESSION['connected'] == 'ok') {

    // On fait la requête SQL pour récupérer les données de l'utilisateur
    $sql = "SELECT *
    		FROM utilisateur
    		INNER JOIN affiliation
    		ON utilisateur.affiliationId = affiliation.affiliationId
    		WHERE utilisateurId = :userid"; // Condition de filtrage sur utilisateurId
    $requete = $database->prepare($sql); // On prépare la requête pour éviter les injections SQL
    $requete->execute([':userid'=>$_SESSION['userid']]); // On execute la requête
	$utilisateur = $requete->fetch(PDO::FETCH_ASSOC); // Récupère les résultats de la requête
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
            <h2>Profil</h2>
        </section>


		<section id="profil">
			<article id="photo">
				<img src="..\assets\images\icones\<?= $utilisateur["utilisateurImageProfil"]; ?>" alt="Photo de profil">
				<a class="button" href="inscription.php">Modifier</a>
			</article>

			<article id="information">
				<p class="champs">Nom</p>
				<p><?= $utilisateur["utilisateurNom"]; ?></p>
			</article>
			
			<article>
				<p class="champs">Prénom</p>
				<p><?= $utilisateur["utilisateurPrenom"]; ?></p>
			</article>
			
			<article>
				<p class="champs">Date de naissance</p>
				<p><?= $utilisateur["utilisateurDateNaissance"]; ?></p>
			</article>
			
			<article>
				<p class="champs">Email</p>
				<p><?= $utilisateur["utilisateurMail"]; ?></p>
			</article>
			
			<article>
				<p class="champs">Affiliation</p>
				<p><?= $utilisateur["affiliationTitre"]; ?></p>
			</article>
			<article>
				<a class="button" href="">Modifier mot de passe</a>
			</article>
		</section>

	</main>
	<footer>
        <?php include "../include/footer.php"; ?>
    </footer>
</body>
</html>