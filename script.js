const buttonBackToTop = document.querySelector(".backToTop")
var userIsAuthorized = false

buttonBackToTop.addEventListener("click", ()=>{
    window.scrollTo(0,0);
})

window.addEventListener("scroll", ()=>{
    if (window.scrollY > 100) {
        buttonBackToTop.style.right = "2%"
    }
    else{
        buttonBackToTop.style.right = "-5%"
    }
})

window.addEventListener("load", ()=>{
    if(userIsAuthorized){
        
    }else{

    }

})