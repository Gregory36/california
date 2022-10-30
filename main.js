window.onload = function(){
    new Auth();
}

// Функционал кнопки возврата наверх
const buttonBackToTop = document.querySelector(".backToTop");

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

// Кнопка logOut выхода из акка

const logOutButton = document.getElementById("logOut_image");

logOutButton.addEventListener("click", ()=>{
    let login_name = document.getElementById('login_name');
    const buttonSignIn = document.getElementById('signIn_image');
    const buttonLogOut = document.getElementById('logOut_image');
    localStorage.setItem("сurrentUser", "empty");
    login_name.hidden = true;
    login_name.textContent = "";
    buttonSignIn.hidden = false;
    buttonLogOut.hidden = true;
})

