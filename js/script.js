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


let exitButtonRsv = document.querySelector("#rsv");
let exitNavigation = document.querySelector("nav");
let exitFormSearch = document.querySelector(".form_search");
let exitExit = document.querySelector("#exit");

exitExit.addEventListener("click", function() {
    
    exitFormSearch.style.display = "none";
    exitExit.style.display = "none";
    exitButtonRsv.style.display = "block";
    exitNavigation.style.height = "110px";
    exitFormSearch.style.top = "-745px";

    body.style.overflowY = "scroll"

    window.onscroll = function() {};
    
})