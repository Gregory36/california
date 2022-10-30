
const buttonSignInOnModal = document.getElementById('buttonSignInOnModal');
const buttonSignIn = document.getElementById('signIn_image');
const buttonLogOut = document.getElementById('logOut_image');
const modal = document.getElementById('exampleModal');

buttonSignIn.addEventListener("click", ()=>{
    if(localStorage.getItem("login") != null){
        alert("Пользователь уже авторизован!");
        return;
    }
})

buttonSignInOnModal.addEventListener("click", ()=>{
    let login_name = document.getElementById('login_name');
    let login = document.getElementById('login_textarea').value;
    login = login.replace(/\s/g,'');
    if(login == null || login == "") return;
    localStorage.setItem("login", login);
    login_name.textContent = login;
    login_name.hidden = false;
    buttonSignIn.hidden = true;
    buttonLogOut.hidden = false;
})

buttonLogOut.addEventListener("click", ()=>{
    let login = localStorage.getItem("login");
    if(login == null) return;
    localStorage.removeItem("login");
    let login_name = document.getElementById('login_name');
    login_name.hidden = true;
    buttonLogOut.hidden = true;
    buttonSignIn. hidden = false;
})

window.addEventListener("load", ()=>{
    let login = localStorage.getItem("login");
    let login_name = document.getElementById('login_name');
    if(login == null) return;
    login_name.hidden = false;
    login_name.textContent = login;
    buttonSignIn.hidden = true;
    buttonLogOut.hidden = false;

 })
