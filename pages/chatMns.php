<?php 
require_once "../connexion/connect.php";
include "../include/head.php"; 
require_once "../include/_protect.php"; // Récupère le fichier protect

// Récuperation de la table messages
$sql = "SELECT * 
        FROM messages 
        INNER JOIN utilisateur 
        ON utilisateur.utilisateurId = messages.utilisateurId 
        WHERE ";
$requete = $database->prepare($sql);
// $requete->execute();
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
        <?php
         
         setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);  
         date_default_timezone_set('Europe/Paris');
         $actuallyDate = strftime('%A %d %B');

          ?>
            <section id="actuallyTitle">
                <h2><?= $actuallyDate ?></h2> <!-- Récuperation date et heure du message -->
            </section>
            <section id="containerMessages">
            </section>
            </main>
            
           

                <aside id="inputChat">
                <form method="POST" id="inputContainer" >
                    <input type="text" name="message" id="message" >
                    <ul>
                    <li>
                    <article>
                    <img src="../assets/images/icones/miniMenuNoir.png" alt="icone mini menu burger">
                            </article>
                            </li>
                            <li>
                            <article>
                            <a href="">
                            <img src="../assets/images/icones/ImageNoir.png" alt="icone appel audio">
                            </a>
                            </article>
                            </li>
                            <li>
                            <article>
                            <a href="">
                            <img src="../assets/images/icones/appelVideoNoir.png" alt="icone appel en visio">
                            </a>
                            </article>
                            </li>
                <li>
                <article>
                <a href="">
                            <img src="../assets/images/icones/appelAudioNoir.png" alt="icone import d'une photo">
                        </a>
                        </article>
                        </li>
                        <li>
                        <article>
                        <a href="">
                        <img src="../assets/images/icones/emojiNoir.png" alt="icone appel audio">
                        </a>
                        </article>
                        </li>
                        <li>
                        <article>
                        <a href="">
                        <img src="../assets/images/icones/importFichierNoir.png" alt="icone appel audio">
                        </a>
                        </article>
                        </li>
                        </ul>
                        
                        <button>
                        <input  type="hidden" name="submit"></input>
                        <img src="../assets/images/icones/envoirBleu.png" alt="icone d'envoi">
                        </button>
        </form>
        </aside>
   
    <footer>
        <?php include "../include/footer.php"; ?>
    </footer>
    <script src="../assets/scripts/js/scroll.js"></script>
</body>


</html>