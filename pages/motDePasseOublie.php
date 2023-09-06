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
            <h1>Mot de passe oublié</h1>

            <form>
                <label>Email</label>
                <input type="email" name="mail" required>
                
                <button>Envoyer</button>
            </form>
        </section>
    </main>
</body>

</html>