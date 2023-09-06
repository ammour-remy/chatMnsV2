<?php
require_once "../connexion/connect.php";
include "../include/head.php"; 
?>

<body>
    <header>
         <a href="../index.php"><img id="logo" src="../assets/images/LogoChatMNS.png" alt="Logo Chat MNS"></a>
   </header>
    
    <main>
        <section>
            <h1>Nouveau mot de passe</h1>

            <form>
                <label>Mot de passe</label>
                <input type="password" name="pwd">

                <label>Mot de passe</label>
                <input type="password" name="pwdConfirm">
                
                <button>Envoyer</button>
            </form>
        </section>
    </main>
</body>

</html>