document.addEventListener("DOMContentLoaded", createPage);

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
    form.append(inputUsername);

    let inputPassword = document.createElement("input");
    inputPassword.placeholder = "Password";
    inputPassword.classList.add("input");
    form.append(inputPassword);

    let inputConfirmPassword = document.createElement("input");
    inputConfirmPassword.placeholder = "Confirm password";
    inputConfirmPassword.classList.add("input");
    form.append(inputConfirmPassword);

    let inputEMail = document.createElement("input");
    inputEMail.placeholder = "EMail";
    inputEMail.classList.add("input");
    form.append(inputEMail);

    let button = document.createElement("button");
    button.classList.add("button");
    button.type = "submit";
    button.innerText = "Register";
    form.append(button);

    let elementFooter = document.createElement("div");
    elementFooter.classList.add("footer");
    elementFooter.innerText = "Copyright by ..., 2016 ";
    elementContainer.append(elementFooter);
}