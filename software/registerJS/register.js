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

    let elementInputUsername = document.createElement("input");
    elementInputUsername.placeholder = "Username";
    elementInputUsername.classList.add("inputForm");
    form.append(elementInputUsername);

    let elementInputPassword = document.createElement("input");
    elementInputPassword.placeholder = "Password";
    elementInputPassword.classList.add("inputForm");
    form.append(elementInputPassword);

    let elementInputConfirmPassword = document.createElement("input");
    elementInputConfirmPassword.placeholder = "Confirm password";
    elementInputConfirmPassword.classList.add("inputForm");
    form.append(elementInputConfirmPassword);

    let elementInputEMail = document.createElement("input");
    elementInputEMail.placeholder = "EMail";
    elementInputEMail.classList.add("inputForm");
    form.append(elementInputEMail);

    let button = document.createElement("button");
    button.classList.add("buttonReg");
    button.type = "submit";
    button.innerText = "Register";
    form.append(button);

    let elementFooter = document.createElement("div");
    elementFooter.classList.add("header");
    elementFooter.classList.add("footer");
    elementFooter.innerText = "Copyright by ..., 2016 ";
    elementContainer.append(elementFooter);
}
