document.addEventListener("DOMContentLoaded", createPage);
function send(event)
{
    event.preventDefault();
    fetch("index.php", {method: "POST", body: new FormData(document.forms[0])})
        .then(response => response.text())
        .then(text => {document.querySelector('.output').innerHTML = text;
        })
}
function createPage() {
    let container = document.createElement("div");
    container.classList.add("container");
    document.body.append(container);

    let header = document.createElement("div");
    header.classList.add("header");
    header.innerText = "super notebook";
    container.append(header);

    let info = document.createElement("div");
    info.classList.add("info");
    container.append(info);

    let form = document.createElement("form");
    form.id = "form";
    info.append(form);

    let userName = document.createElement("input");
    userName.placeholder = "Username";
    userName.classList.add("inputWindow");
    userName.name = "userName";
    userName.type = "text";
    userName.required = true;
    form.append(userName);

    let password = document.createElement("input");
    password.placeholder = "Password";
    password.classList.add("inputWindow");
    password.name = "password";
    password.type = "password";
    password.required = true;
    form.append(password);

    let confirmPassword = document.createElement("input");
    confirmPassword.placeholder = "Confirm password";
    confirmPassword.classList.add("inputWindow");
    confirmPassword.name = "confirmPassword";
    confirmPassword.type = "password";
    confirmPassword.required = true;
    form.append(confirmPassword);

    let email = document.createElement("input");
    email.placeholder = "E-mail";
    email.classList.add("inputWindow");
    email.name = "email";
    email.type = "email";
    form.append(email);

    let button = document.createElement("input");
    button.classList.add("buttonReg");
    button.type = "submit";
    button.name = "button";
    button.onclick = send;
    button.value = "Register";
    form.append(button);

    let footer = document.createElement("div");
    footer.classList.add("footer");
    footer.innerText = "Copyright by..., 2016";
    container.append(footer);
}

