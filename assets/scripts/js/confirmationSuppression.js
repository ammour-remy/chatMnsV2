function confirmer() {
    if(confirm("Voulez-vous vraiment supprimer le compte ?")) {
        alert("Supression effectuer");
        location.href = "../../../connexion/suppressionCompte.php";
    }
    else {
        alert("Suppression annulée");
    }
}

let supp = document.querySelector("#suppression");
supp.addEventListener("click", function(e) {
    confirmer();
})
