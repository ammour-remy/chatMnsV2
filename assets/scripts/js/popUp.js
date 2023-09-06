// Fonction pour modifier l'affichage du container
function popUp(clickPopUp) {
    let popUp = document.querySelector(clickPopUp);
    
    if (popUp.classList.contains("hidden")) {
       // Si le container est cachée, on l'affiche
       popUp.classList.remove("hidden");
       popUp.classList.add("visibility");
       // Si le container qui permet de faire l'animation
       popUp.classList.remove("out");
       popUp.classList.add("visible");
       
      }else {
        // Si le container qui permet de faire l'animation
      popUp.classList.remove("visible");
      popUp.classList.add("out");
        // Si le container est affichée, on la cache
        popUp.classList.remove("visibility");
      setTimeout(() => {popUp.classList.add("hidden")},700);
      setTimeout(() => {popUp.classList.remove("out")},700);
    }
}

// Ajout d'un écouteur d'événements à chaque bouton
let burgerMenu = document.querySelector("#buttonBurgerMenu");
burgerMenu.addEventListener("click", function() {
  popUp("#burgerMenu");
});
let statutMenu = document.querySelector(".buttonStatut");
statutMenu.addEventListener("click", function() {
  popUp(".statut");
});
let notificationFooter = document.querySelector(".buttonNotification");
notificationFooter.addEventListener("click", function() {
  popUp(".notification");
});
let rechercheFooter = document.querySelector("#buttonRechercheFooter");
rechercheFooter.addEventListener("click", function() {
  popUp("#rechercher");
});
let rechercheHeader = document.querySelector("#buttonRechercheHeader");
rechercheHeader.addEventListener("click", function() {
  popUp("#rechercher");
});
let asideGroupMenu = document.querySelector("#buttonAsides");
asideGroupMenu.addEventListener("click", function() {
  popUp("#groupMenu");
  popUp("#subMenu");
});

let adminGroupe = document.querySelector(".buttonAdmin");
adminGroupe.addEventListener("click", function() {
  popUp("#group");
  popUp("#user");
});