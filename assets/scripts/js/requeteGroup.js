let groupeIdActuel = 0;


function refreshGroupe() {



fetch("http://chatmnsv2/pages/requeteGroup.php")
  .then((response) => {
    if (!response.ok) {
      throw new Error("Erreur lors de la récupération des données.");
    }
    return response.json();
  })
  .then((response) => {
    // Vérifier si la réponse est un objet ou un tableau
    const articles = Array.isArray(response) ? response : [response];

    let conteneurArticles = document.querySelector("#listGroup");

    conteneurArticles.innerHTML = "";

    // Parcourir les articles avec forEach
    articles.forEach(function (article) {
      // Créer un élément d'article
      let articleGroupe = document.createElement("article");
      // articleGroupe.dataset.groupeId = article.groupeId;

      // Créer un élément d'image
      let imageGroupe = document.createElement("img");
      imageGroupe.src = "../assets/images/icones/" + article.groupeImage;
      articleGroupe.appendChild(imageGroupe);


      // Création de l'élément à survoler (div)
      let titreGroupe = document.createElement('h4');
      titreGroupe.innerText = article.groupeTitre;
      titreGroupe.classList.add("hoverTitre");
      titreGroupe.style.display = 'none';
      titreGroupe.style.opacity = '0';
      articleGroupe.appendChild(titreGroupe);
      
      
      
      // Ajout d'un écouteur d'événement pour le survol de l'élément
      articleGroupe.addEventListener('mouseover', function() {
        //   let titreGroupe = document.createElement('h4');
        // titreGroupe.innerText = article.groupeTitre;
        titreGroupe.classList.add("hoverTitre");
        // titreGroupe.classList.add("hoverTitre");
        // titreGroupe.style.display = 'none';
        // titreGroupe.style.opacity = '0';
        // articleGroupe.appendChild(titreGroupe);
        titreGroupe.style.display = 'block';
        titreGroupe.style.opacity = '1';
      });
      
      // Ajout d'un écouteur d'événement pour la fin du survol de l'élément
      articleGroupe.addEventListener('mouseout', function() {
        titreGroupe.style.display = 'none';
        titreGroupe.style.opacity = '1';
        titreGroupe.classList.add("hoverTitre");
      });
      articleGroupe.addEventListener("click", function (event) {        // Envoie de l'ID du groupe au fichier PHP via une requête AJAX
        // document.location.href="http://chatmnsv2/pages/chatMns.php";
        //window.location.href = "http://chatmnsv2/pages/chatMns.php";
         groupeIdActuel = article.groupeId;

        refreshMessage() 
      })

      // Créer un élément de titre
      // let titreGroupe = document.createElement("h2");
      // titreGroupe.textContent = article.groupeTitre;
      // articleGroupe.appendChild(titreGroupe);

     

      conteneurArticles.appendChild(articleGroupe);
    });
  })
  .catch((error) => {
    // Gérer les erreurs de la requête
    console.error("Une erreur s'est produite :", error);
  });

}

function refreshMessage() {
  fetch(
    "http://chatmnsv2/pages/requeteMessagesGroup.php?groupeId=" +
      encodeURIComponent(groupeIdActuel)
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error("Erreur lors de la requête.");
      }

      response.json().then((messages) => {
        
        const articlesMessages = Array.isArray(messages) ? messages : [messages];
        
        let conteneurMessages = document.querySelector("#containerMessages");
        
        conteneurMessages.innerHTML = "";
        
        // Parcourir les articles avec forEach
        articlesMessages.forEach(function (message) {
          
          
          // Créer un élément section
          let groupeMessages = document.createElement("section");
          fetch('http://chatmnsv2/pages/sessionId.php')
          .then(response => response.json())
          .then(session => {
            // Les données de session sont disponibles dans la variable 'data'
            if(message.utilisateurId !=session.idSession){
              groupeMessages.classList.add("otherMessages");
            }
            else{
              groupeMessages.classList.add("myMessages");
              
            }
          })
          .catch(error => {
            // Gérer les erreurs de requête
            console.error(error);
          });
          
          
          // Créer un élément d'article header
            let headerMessage = document.createElement("article");
            headerMessage.classList.add("chatIdentity");

            // Créer l'image de profil
            let iconeProfil = document.createElement("img");
            iconeProfil.src = "../assets/images/icones/" + message.utilisateurImageProfil;
            iconeProfil.alt = "icone profil";
            iconeProfil.classList.add("iconeProfil");
            headerMessage.appendChild(iconeProfil);

            // Créer le titre de l'identité du profil
            let chatUtilisateurNom = document.createElement("h5");
            chatUtilisateurNom.textContent = message.utilisateurNom + " " + message.utilisateurPrenom;
            headerMessage.appendChild(chatUtilisateurNom);
            groupeMessages.appendChild(headerMessage);

             // Créer un élément d'article header
             let mainMessage = document.createElement("article");
             
             // Créer un élément p pour l'entité du message
             let entiteMessages = document.createElement("p");
             entiteMessages.classList.add("messages");
             entiteMessages.textContent = message.messageEntite;
             mainMessage.appendChild(entiteMessages);

              // Créer un élément d'article header
            let endMessage = document.createElement("article");
             
             // Créer un élément p pour la date d'envoie
             let dateMessages = document.createElement("p");
             dateMessages.classList.add("getDate");
             dateMessages.textContent = message.messageDate + " " + message.messageHeure;
             endMessage.appendChild(dateMessages);




           
            
             groupeMessages.appendChild(mainMessage);
             groupeMessages.appendChild(endMessage);

            conteneurMessages.appendChild(groupeMessages);
          })
          
        })
        
      })
    .catch((error) => {
      console.error("Une erreur s'est produite :", error);
    });

}




refreshGroupe();
window.addEventListener("DOMContentLoaded", function() {
  let mainElement = document.querySelector("main");
  mainElement.scrollTop = mainElement.scrollHeight;
});


  const form = document.querySelector("#inputContainer")
  const message = document.querySelector("#message")

          form.addEventListener("submit" , (e) => {
              e.preventDefault()
              fetch("http://chatmnsv2/pages/chatMnsAction.php", {method:"POST",body : '{"message" : "'+ message.value +'"}'})
              .then(response => response.json())
              .then(resultat => refreshMessage())
              .catch(error => {
                // Gérer les erreurs de requête
                console.error(error);
              });
          
            // Réinitialiser la valeur de l'input
            message.value = '';
          });