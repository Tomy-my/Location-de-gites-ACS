// Reservation 
let buttonRsv = document.querySelector("#rsv");
let navigation = document.querySelector("nav");
let formSearch = document.querySelector(".form_search");
let exit = document.querySelector("#exit");

let body = document.querySelector("body");
    
buttonRsv.addEventListener("click", function() {
    
    buttonRsv.style.display = "none";
    formSearch.style.display = "flex";
    navigation.style.height = "100vh";
    exit.style.display = "block";
    
    body.style.overflowY = "hidden"

    scrollHaut = window.pageYOffset; 
    scrollGauche = window.pageXOffset;
        window.onscroll = function() 
        { 
        window.scrollTo(scrollGauche, scrollHaut); 
        }; 
    
        setTimeout(function() {
            formSearch.style.top = "0px";
            }, 200);
})

// Connexion
let clickAdmin = document.querySelector("#logo1");
let formConnexion = document.querySelector(".form_connexion");

clickAdmin.addEventListener("click", function(){
    formSearch.style.top = "-745px";

    setTimeout(function() {
        formSearch.style.display = "none";
        }, 1000);

        setTimeout(function() {
            formConnexion.style.display = "flex";
            }, 1100);

            setTimeout(function() {
                formConnexion.style.top = "0px";
                }, 1200);
})

// tout quitter
exit.addEventListener("click", function() {
    
    exit.style.display = "none";
    navigation.style.height = "110px";
    formSearch.style.top = "-745px";
    formConnexion.style.top = "-745px";

    body.style.overflowY = "scroll"

    window.onscroll = function() {};

    setTimeout(function() {
        formSearch.style.display = "none";
        formConnexion.style.display = "none";
        buttonRsv.style.display = "block";
        }, 600);
})