// Авторизация и регистрация
document.getElementById("enter").onclick = buttonWasClicked;
document.getElementById("registration").onclick = buttonWasClicked;

async function buttonWasClicked (event){ 
    event.preventDefault(); // перехват действия браузера по-умолчани
    event.stopPropagation(); // остановка продвижения события
    let target = event.target;
    let isEnter = target.name=="enter"?true:false;                
    let formData = new FormData();
    formData.append("login", document.getElementById("login").value);
    formData.append("password", document.getElementById("password").value);
    formData.append("isEnter", isEnter);
    let response = await fetch("registration.php",
    {
        method: "POST",
        body: formData
    });
    let result = await response.json();
    if (result.login) {  
        document.getElementById("login_name").textContent = result.login;
        document.getElementById("login_name").hidden = false;
        const buttonSignIn = document.getElementById('signIn_image');
        const buttonLogOut = document.getElementById('logOut_image');
        buttonSignIn.hidden = true;
        buttonLogOut.hidden = false;
        localStorage.setItem("сurrentUser", result.login);
        alert("Вы вошли под именем " + result.login);
    }
    if (result.error) {
        alert(result.error);
        console.log(result.error);
    }  
}

window.onload = () => {
    let user = localStorage.getItem("сurrentUser");
    if(user == null || user == "empty"){
        return;
    }
    document.getElementById("login_name").textContent = user;
    document.getElementById("login_name").hidden = false;
    const buttonSignIn = document.getElementById('signIn_image');
    const buttonLogOut = document.getElementById('logOut_image');
    buttonSignIn.hidden = true;
    buttonLogOut.hidden = false;
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

