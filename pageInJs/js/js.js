document.addEventListener("DOMContentLoaded", createPage);

function send(event) {
    event.preventDefault();
    fetch("php/index.php", {method: "POST", body: new FormData(document.forms[0])})
        .then(response => response.text()).then(outputResult => {
           document.querySelector(".oshibka").innerHTML = outputResult;
    })
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
    inputUsername.required = true;
    form.append(inputUsername);

    let inputPassword = document.createElement("input");
    inputPassword.placeholder = "Password";
    inputPassword.classList.add("input");
    inputPassword.name = "password";
    inputPassword.type = "password";
    inputPassword.required = true;
    form.append(inputPassword);

    let inputConfirmPassword = document.createElement("input");
    inputConfirmPassword.placeholder = "Confirm password";
    inputConfirmPassword.classList.add("input");
    inputConfirmPassword.name = "confirmPassword";
    inputConfirmPassword.type = "password";
    inputConfirmPassword.required = true;
    form.append(inputConfirmPassword);

    let inputEMail = document.createElement("input");
    inputEMail.placeholder = "EMail";
    inputEMail.classList.add("input");
    inputEMail.name = "email";
    form.append(inputEMail);

    let button = document.createElement("button");
    button.classList.add("button");
    button.type = "submit";
    button.innerText = "Register";
    button.onclick = send;
    form.append(button);

    let oshibka = document.createElement("div");
    oshibka.classList.add("oshibka");
    form.append(oshibka);

    let elementFooter = document.createElement("div");
    elementFooter.classList.add("footer");
    elementFooter.innerText = "Copyright by ..., 2016 ";
    elementContainer.append(elementFooter);
}