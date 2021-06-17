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




//Zoom img gîte
let zoomImg = document.querySelector(".img_gite img");

let moreImg = document.querySelector(".more_img");

let containerImg = document.querySelector(".img_gite")
let containerDesc = document.querySelector(".desc_gite");
let containerDescText = document.querySelector(".desc_text_gite");

let backZoom = document.querySelector("#back_zoom");

zoomImg.addEventListener("click", function(){

    containerDesc.style.top = "1000px";
    
    setTimeout(function() {
        moreImg.style.display = "flex";

        containerImg.style.display = "none";
        
        containerDescText.style.display = "none";
        
        containerDesc.style.display = "block";
        containerDesc.style.marginTop = "0px";
    
    
        backZoom.style.display = "block";
        }, 1000);

        setTimeout(function() {
            containerDesc.style.top = "0px";

            }, 1100);
})


// back zoom img gîte
backZoom.addEventListener("click", function() {
    containerDesc.style.top = "1000px";
    
    setTimeout(function() {
        moreImg.style.display = "none";

        containerImg.style.display = "block";
        
        containerDescText.style.display = "block";
        
        containerDesc.style.display = "flex";
        containerDesc.style.marginTop = "25px";
    
    
        backZoom.style.display = "none";
        }, 1000);

        setTimeout(function() {
            containerDesc.style.top = "0px";

            }, 1100);
})
