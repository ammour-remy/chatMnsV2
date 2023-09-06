function useBlur() {
  let header = document.querySelector("header");
  let main = document.querySelector("main");
  
  header.classList.toggle("blur");
  main.classList.toggle("blur");
}

  // Assure-toi d'appeler cette fonction lorsque l'élément est cliqué
  let asides = document.querySelector("#buttonAsides");
  asides.addEventListener("click", useBlur);