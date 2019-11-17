document.addEventListener("DOMContentLoaded", createPage);

function register(){
    window.location.href = "http://localhost/wdb-course-3/projectNotebook/pageRegistration/index.html";
}

function login(){
    
}

function createPage() {
    let elementContainer = document.createElement("div");
    elementContainer.classList.add("container");
    document.body.append(elementContainer);

    let elementHeader = document.createElement("div");
    elementHeader.classList.add("header");
    elementHeader.innerText = "SUPER NOTEBOOK";
    elementContainer.append(elementHeader);

    let elementContent = document.createElement("div");
    elementContent.classList.add("content");
    elementContainer.append(elementContent);

    let form = document.createElement("form");
    form.id = "form";
    elementContent.append(form);

    let inputUsername = document.createElement("input");
    inputUsername.placeholder = "Username";
    inputUsername.classList.add("input");
    inputUsername.name = "username";
    inputUsername.type = "text";
    inputUsername.required = true;
    form.append(inputUsername);

    let inputPassword = document.createElement("input");
    inputPassword.placeholder = "Password";
    inputPassword.classList.add("input");
    inputPassword.name = "password";
    inputPassword.type = "password";
    inputPassword.required = true;
    form.append(inputPassword);

    let buttonLogin = document.createElement("button");
    buttonLogin.classList.add("button");
    buttonLogin.type = "submit";
    buttonLogin.innerText = "Login";
    //buttonLogin.onclick = send;
    form.append(buttonLogin);

    let buttonregister = document.createElement("button");
    buttonregister.classList.add("button");
    buttonregister.innerText = "Register";
    buttonregister.onclick = register;
    form.append(buttonregister);

    let oshibka = document.createElement("div");
    oshibka.classList.add("oshibka");
    form.append(oshibka);

    let elementFooter = document.createElement("div");
    elementFooter.classList.add("footer");
    elementFooter.innerText = "Copyright by ..., 2016 ";
    elementContainer.append(elementFooter);
}