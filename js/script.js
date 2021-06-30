let body = document.querySelector("body");

//Menu burger MOBILE
let navigation = document.querySelector("nav");

let hrContainer = document.querySelector(".burger_menu");
let slideTop = document.querySelector("#burger_slide1");
let slideMid = document.querySelector("#burger_slide2");
let slideBot = document.querySelector("#burger_slide3");

let menuCl = document.querySelector(".burger_cl");
let exitBurger = document.querySelector("#exit_burger");

hrContainer.addEventListener("click", function() {

    slideTop.style.width = "0px";

    setTimeout(function() {
        slideMid.style.width = "0px";
        }, 200);

        setTimeout(function() {
            slideBot.style.width = "0px";
            }, 400);
            
            setTimeout(function() {
                hrContainer.style.display = "none";
                }, 1000);

                setTimeout(function() {
                    navigation.style.height = "100vh";

                    body.style.overflowY = "hidden"

                    scrollHaut = window.pageYOffset; 
                    scrollGauche = window.pageXOffset;
                        window.onscroll = function() 
                        { 
                        window.scrollTo(scrollGauche, scrollHaut); 
                        }; 
                    }, 1100);

                    setTimeout(function() {
                        exitBurger.style.display = "block";
                        exitBurger.style.marginLeft = "auto";
                        
                        exitBurger.style.opacity = "0";
                        menuCl.style.display = "flex";
                        menuCl.style.opacity = "0";
                        }, 1400);

                        setTimeout(function() {
                            exitBurger.style.opacity = "1";
                            
                            menuCl.style.opacity ="1";
                            }, 1600);
})

exitBurger.addEventListener("click", function() {
    
    exitBurger.style.opacity = "0";
    menuCl.style.opacity = "0";

    setTimeout(function() {
        exitBurger.style.display = "none";
        menuCl.style.display = "none";

        navigation.style.height = "110px";
        }, 400);
            
            setTimeout(function() {
                hrContainer.style.display = "flex";
                }, 700);

                setTimeout(function() {
                    slideTop.style.width = "63px";
                    }, 900);

                    setTimeout(function() {
                        slideMid.style.width = "63px";
                        }, 1100);
            
                        setTimeout(function() {
                            slideBot.style.width = "63px";
                            }, 1300);
                        
                            setTimeout(function() {
                                body.style.overflowY = "scroll"

                                window.onscroll = function() {};
                                }, 1500);
})



// Reservation 
let buttonRsv = document.querySelector("#rsv");
let formSearch = document.querySelector(".form_search");

let exit = document.querySelector("#exit");
    
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

function moreImg(id){

    console.log(id);

    let moreImg = document.querySelector("#more_img-"+id);
    
    let containerImg = document.querySelector("#img_gite-"+id)
    let containerDesc = document.querySelector("#desc_gite-"+id);
    let containerDescText = document.querySelector("#desc_text_gite-"+id);
    
    let backZoom = document.querySelector("#back_zoom-"+id);

    containerDesc.style.top = "1000px";
    
    setTimeout(function() {
        containerImg.style.display = "none";
        
        containerDescText.style.display = "none";
        
        containerDesc.style.display = "block";
        containerDesc.style.marginTop = "0px";

        moreImg.style.display = "flex";
    
    
        backZoom.style.display = "block";
        }, 1000);

        setTimeout(function() {
            containerDesc.style.top = "0px";

            }, 1100);
    
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
}


// back zoom img gîte


