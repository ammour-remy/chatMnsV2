// Cette fonction affiche la boîte de dialogue de confirmation
function afficherBoiteDialogue(idCompte) {
    dernierCompteSelectionne = idCompte;
    let boiteDialogue = document.querySelector("#boiteDialogue"); // Sélectionne l'élément HTML avec l'ID "boiteDialogue"
    boiteDialogue.style.display = "block"; // Modifie le style de l'élément pour le faire apparaître
}

// Cette fonction est appelée lorsque le bouton de confirmation est cliqué
function confirmerSuppression() {
    location.href = "../../../connexion/suppressionCompte.php";
    
    // Réduit la boîte de dialogue en la masquant
    let boiteDialogue = document.querySelector("#boiteDialogue");
    boiteDialogue.style.display = "none";
}
let dernierCompteSelectionne

// Sélectionne le bouton de suppression de compte (partie Admin)
let supprimerComptes = document.querySelectorAll(".suppression");
supprimerComptes.forEach(supprimerCompte => {
    supprimerCompte.addEventListener("click", () => afficherBoiteDialogue(supprimerCompte.getAttribute("data-id-compte")))
});

// Sélectionne le bouton de confirmation et ajoute un écouteur d'événement pour appeler la fonction de confirmation de suppression
let boutonConfirmer = document.querySelector("#confirmer")
boutonConfirmer.addEventListener("click", confirmerSuppression);

// Sélectionne le bouton d'annulation et ajoute un écouteur d'événement avec une fonction anonyme
let boutonAnnuler = document.querySelector("#annuler");
boutonAnnuler.addEventListener("click", function() {
    let boiteDialogue = document.querySelector("#boiteDialogue");  // Réduit la boîte de dialogue en la masquant
    boiteDialogue.style.display = "none";
    location.href = "../../../pages/parametre.php";  // Redirige vers la page de paramètres
});
