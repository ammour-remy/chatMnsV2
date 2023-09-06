<?php
require_once "connexion/connect.php"; // Récupère le fichier de connexion
include "include/head.php"; // Récupère le fichier "head"

if(isset($_POST['mail']) && $_POST['mail'] != "" // Vérifie si l'email est bien dans la BDD
&& isset($_POST['pwd']) && $_POST['pwd'] != "") { // Vérifie si le mot de passe est bien dans la BDD

    // Récupère la valeur de l'input "mail" et "pwd" et les mets dans une variable
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];

    // Pour la securité des failles XSS par injection de code
    $mail = htmlspecialchars($mail);
    $pwd = htmlspecialchars($pwd);

    // On fait la requête SQL
    $sql = "SELECT *, count(*) AS nbuser 
            FROM utilisateur 
            WHERE utilisateurMail = :mail";

    $requete = $database->prepare($sql); // On prépare la requête pour éviter les injections SQL
    $requete->execute([":mail"=>$mail]); // On execute la requête
    $resultat = $requete->fetch();

    if($resultat['nbuser'] == 1) {
        if(password_verify($pwd, $resultat['utilisateurMotDePasse'])) { // On vérifie le hashage
            $_SESSION['connected'] = "ok"; // Relié à session_start(), stock les données de l'utilisateur
            $_SESSION['userid'] = $resultat['utilisateurId'];
            $sessionId = $_SESSION["userid"];

            $sqlArchive = "SELECT *
                           FROM utilisateur 
                           WHERE utilisateurId= $sessionId";

            $requeteArchive = $database->prepare($sqlArchive); // On prépare la requête pour éviter les injections SQL
            $requeteArchive->execute(); // On execute la requête
            $resultatArchive = $requeteArchive->fetch(PDO::FETCH_ASSOC);


            if ($resultatArchive["isArchive"]==0) {            
             header("Location:pages/chatMns.php"); // Redirige vers la page principale chatMns.php
            exit();
            } else {
                 echo "Ce compte a été supprimé.";
                 session_destroy();
            }

        } else {
            echo "Les identifiants de connexion sont faux";
        }
    }
}
?>

<body>
    <header>
        <a href="index.php"><img id="logo" src="assets/images/LogoChatMNS.png" alt="Logo Chat MNS"></a>
   </header>
    
    <main>
        <section>
            <h1>Se connecter à Chat MNS</h1>

            <form method="POST" action="index.php">
                <label>Email</label>
                <input type="email" name="mail" required>
    
                <label>Mot de passe</label>
                <input type="password" name="pwd" required>
                
                <article>
                    <a href="pages/inscription.php">S'inscrire</a>
                </article>
                <article>
                    <a href="pages/motDePasseOublie.php">Mot de passe oublié ?</a>
                </article>
                <button type="submit">Connexion</button>
            </form>
        </section>
    </main>
</body>

</html>