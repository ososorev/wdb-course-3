document.addEventListener("DOMContentLoaded", createPage);
function send(event) {
    event.preventDefault();
    fetch("index.php", {method: "POST", body: new FormData(document.forms[0])})
        .then(response => response.text())
        .then(outputResult => {
            document.querySelector('.output').innerHTML = outputResult;
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
        form.classList.add("form-style");
        info.append(form);

        let methodForm = document.createAttribute("method");
        methodForm.value = "POST";
        form.setAttributeNode(methodForm);

        let actionForm = document.createAttribute("action");
        actionForm.value = "save_user.php";
        form.setAttributeNode(actionForm);

        let login = document.createElement("input");
        login.placeholder = "Username";
        login.classList.add("inputWindow", "form-control");
        login.name = "login";
        login.type = "text";
        login.required = true;
        form.append(login);

        let password = document.createElement("input");
        password.placeholder = "Password";
        password.classList.add("inputWindow", "form-control");
        password.name = "password";
        password.type = "password";
        password.required = true;
        form.append(password);

        let confirmPassword = document.createElement("input");
        confirmPassword.placeholder = "Confirm password";
        confirmPassword.classList.add("inputWindow", "form-control");
        confirmPassword.name = "confirmPassword";
        confirmPassword.type = "password";
        confirmPassword.required = true;
        form.append(confirmPassword);

        let email = document.createElement("input");
        email.placeholder = "E-mail";
        email.classList.add("inputWindow", "form-control");
        email.name = "email";
        email.type = "email";
        form.append(email);

        let button = document.createElement("input");
        button.classList.add("buttonReg", "btn-primary", "btn-lg", "btn-block");
        button.type = "submit";
        button.name = "button";
        button.onclick = send;
        button.value = "Register";
        form.append(button);

        let elementOutputResult = document.createElement("div");
        elementOutputResult.classList.add("result");
        form.append(elementOutputResult);

        let footer = document.createElement("div");
        footer.classList.add("footer");
        footer.innerText = "Copyright by..., 2016";
        container.append(footer);
    }