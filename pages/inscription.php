<?php
require_once "../connexion/connect.php"; // Récupère le fichier de connexion
include "../include/head.php"; // Récupère le fichier "head"
?>
<body>
    <header>
        <a href="../index.php"><img id="logo" src="../assets/images/LogoChatMNS.png" alt="Logo Chat MNS"></a>
    </header>
    
    <main>
        <section>

<?php
if(isset($_SESSION['userid']) && $_SESSION['connected'] == 'ok') {
    if (isset($_POST["submit"])) {
        $nameModif = $_POST["nameModif"];
        $firstNameModif = $_POST["firstName"];
        $dateOfBirthModif = $_POST["dateOfBirth"];
        $mailModif = $_POST["mail"];

        
        // Pour la securité des failles XSS par injection de code
        $nameModif = htmlspecialchars($nameModif);
        $firstNameModif = htmlspecialchars($firstNameModif);
        $dateOfBirthModif = htmlspecialchars($dateOfBirthModif);
        $mailModif = htmlspecialchars($mailModif);

        // requete
        $sqlModification ="UPDATE utilisateur 
                           SET utilisateurNom=:utilisateurNom, utilisateurPrenom=:utilisateurPrenom, utilisateurMail=:utilisateurMail,utilisateurDateNaissance=:utilisateurDateNaissance 
                           WHERE utilisateurId=:utilisateurId";
        $requeteModif = $database->prepare($sqlModification);
        if ($requeteModif->execute([":utilisateurNom" => $nameModif, ":utilisateurPrenom" => $firstNameModif, ":utilisateurMail" => $mailModif, ":utilisateurDateNaissance" => $dateOfBirthModif, ":utilisateurId" => $_SESSION["userid"]])) {
                header("Location:../pages/profil.php"); // Redirige vers la page d'accueil
                exit();
        } else {
            echo "Une erreur s'est produite lors de l'exécution de la demande.";
        } 
    }
?>
    
            <h1>Modifier</h1>

            <form method="POST" action="inscription.php">
                <article>
                    <label>Nom</label>
                    <input type="text" name="nameModif" required>
                </article>

                <article>
                    <label>Prénom</label>
                    <input type="text" name="firstName" required>
                </article>

                <article>
                    <label>Email</label>
                    <input type="email" name="mail" required>
                </article>

                <article>
                    <label>Date de naissance</label>
                    <input type="date" name="dateOfBirth">
                </article>
                <input  type="hidden" name="submit"></input>
                
                <button>Modifier</button>
            </form>
        </section>
    </main>
</body>

</html>
<?php

} else {
    if (isset($_POST["submit"])) {

        // Récupère la valeur des input et les mets dans une variable
        $name = $_POST["name"];
        $firstName = $_POST["firstName"];
        $dateOfBirth = $_POST["dateOfBirth"];
        $utilisateurImageProfil = "default.jpg";
        $pwd = $_POST["pwd"];
        $pwdConfirm = $_POST["pwdConfirm"];
        $mail = $_POST["mail"];
        $statut = 3;
        $affiliation = 5;
        $isAdmin = 0;
        
        // Pour la securité des failles XSS par injection de code
        $name = htmlspecialchars($name);
        $firstName = htmlspecialchars($firstName);
        $dateOfBirth = htmlspecialchars($dateOfBirth);
        $pwd = htmlspecialchars($pwd);
        $pwdConfirm = htmlspecialchars($pwdConfirm);
        $mail = htmlspecialchars($mail);

        // On vérifie que les mots de passe sont bien identiques
        if ($pwd !== $pwdConfirm) {
            echo "Les mots de passe ne correspondent pas.";
            exit();
        }

        // On vérifie si l'adresse e-mail existe déjà dans la BDD
        $sql = "SELECT COUNT(*) FROM utilisateur WHERE utilisateurMail = :mail";
        $requete = $database->prepare($sql);
        $requete->execute([':mail' => $mail]);
        $count = $requete->fetchColumn();

        // La condition vérifie si l'email est déjà dans la BDD
        if ($count > 0) {
            echo "Cette adresse e-mail est déjà utilisée.";
            exit();
        }

        // On fait la requête SQL pour insérer les données saisies par l'utilisateur
        $sql = "INSERT INTO `utilisateur` (`utilisateurNom`, `utilisateurPrenom`, `utilisateurDateNaissance`, 
            `utilisateurImageProfil`, `utilisateurMotDePasse`, `utilisateurMail`, `statutId`, `affiliationId`, `isAdmin`)
            VALUES 
            (:name, :firstName, :dateOfBirth, :utilisateurImageProfil, :pwd, :mail, :statut, :affiliation, :isAdmin)";

        $requete = $database->prepare($sql); // On prépare la requête pour éviter les injections SQL
        $passwordHash = password_hash($pwd, PASSWORD_DEFAULT); // On "hash" le mot de passe
        if ($requete->execute([ // On execute la requête
            ":name" => $name, 
            ":firstName" => $firstName, 
            ":dateOfBirth" => $dateOfBirth, 
            ":utilisateurImageProfil" => $utilisateurImageProfil, 
            ":pwd" => $passwordHash, 
            ":mail" => $mail, 
            ":statut" => $statut, 
            ":affiliation" => $affiliation, 
            ":isAdmin" => $isAdmin
        ])) {
            header("Location:../index.php"); // Redirige vers la page d'accueil
            exit();
        } else {
            echo "Une erreur s'est produite lors de l'exécution de la demande.";
        } 
    }
?>
            <h1>Inscription</h1>

            <form method="POST" action="inscription.php">
                <article>
                    <label>Nom<span>*</span></label>
                    <input type="text" name="name" required>
                </article>

                <article>
                    <label>Prénom<span>*</span></label>
                    <input type="text" name="firstName" required>
                </article>

                <article>
                    <label>Email<span>*</span></label>
                    <input type="email" name="mail" required>
                </article>

                <article>
                    <label>Date de naissance</label>
                    <input type="date" name="dateOfBirth">
                </article>
                
                <article>   
                    <label>Mot de passe<span>*</span></label>
                    <input type="password" name="pwd" required>
                </article>

                <article>
                    <label>Confirmation<span>*</span></label>
                    <input type="password" name="pwdConfirm" required>
                </article>
                 <input  type="hidden" name="submit"></input>

                <button>S'inscrire</button>
            </form>
        </section>
    </main>
</body>
</html>
<?php } ?>