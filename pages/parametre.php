<?php 
require_once "../connexion/connect.php";
include "../include/head.php"; 
include "../include/_protect.php";
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
            <h2>Paramètres</h2>
        </section>
		<section id="options">
			<article id="apparence" class="sectionsOption">
				<h3>Apparence</h3>
                <section>
                    <article>
                        <input type="radio" id="sombre" name="apparence">
                        <label for="radio">Mode sombre</label>
                    </article>
                    <article>
                        <input type="radio" id="clair" name="apparence" checked>
                        <label for="clair">Mode clair</label>
                    </article>
                </section>
			</article>
			<article id="notification" class="sectionsOption">
                <h3>Notification</h3>
                <section>
                    <article>
                    <input type="radio" id="active" name="notification" checked>
                    <label for="active">Activée</label>
                </article>
                <article>
                    <input type="radio" id="desactive" name="notification">
                    <label for="desactive">Désactivée</label>
                </article>
            </article>
            <article id="optionSound" >
                <h3>Son</h3>
				<label class="volume">Volume d'entrée</label>
				<section id="volume">
                    <input type="range" min="0" max="100" />
                </section>
                <label class="volume">Volume de sortie</label>
                <section id="scrubber">
                    <input class="slider-input" type="range" min="0" max="100" />
                </section>
            </article>
            <article id="mentions">
                <h3>Mentions Légales</h3>
                <a href="mentionsLegales.php" class="button">Accéder aux mentions légales</a>
		    
                <a href="conditionGeneraleUtilisation.php" class="button">Conditions générales d'utilisation</a>
            </article>
            <article id="optionButtons">
               <?php 
                if(isset($_SESSION['userid'])) {
                ?>
                <a class="button" href="../connexion/deconnexion.php">Déconnexion</a>
                <a id="suppression" class="button">Supprimer mon compte</a>
               
                <?php } else { ?>
                <?php } ?>
            </article>
		</section>
	</main>
	<footer>
        <?php include "../include/footer.php"; ?>
    </footer>

    <script src="../assets/scripts/js/confirmationSuppression.js"></script>
</body>
</html>
