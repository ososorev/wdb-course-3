document.addEventListener("DOMContentLoaded", createPage);

function send(event) {
    event.preventDefault();
    fetch("register.php", {method: "POST", body: new FormData(document.forms[0])})
         .then(response => response.text()).then(outputResult => {
        document.querySelector(".output").innerHTML = outputResult;
    })
}
(function () {

})();

function elementDiv($class, $parent) {
    let elementDiv = document.createElement("div");
    elementDiv.classList.add($class);
    $parent.append(elementDiv);
}

function elementInput($placeholder, $name, $type) {
    let elementInput = document.createElement("input");
    elementInput.placeholder = $placeholder;
    elementInput.classList.add("inputForm");
    elementInput.name = $name;
    elementInput.type = $type;
    elementInput.required = true;
    form.append(elementInput);
}

function elementHeaderOrFooter($different, $value) {
    let elementHeaderOrFooter = document.createElement("div");
    elementHeaderOrFooter.classList.add("header", $different);
    elementHeaderOrFooter.innerText = $value;
    elementContainer.append(elementHeaderOrFooter);
}

function createPage() {
    elementDiv("container", document.body);

    elementHeaderOrFooter("", "SUPER NOTEBOOK");

    elementDiv("content", elementContainer);

    let form = document.createElement("form");
    form.id = "form";
    form.classList.add("formBlock");
    form.method = "POST";
    elementContent.append(form);

    elementInput("Username", "inputUsername", "text");
    elementInput("Password", "inputPassword", "password");
    elementInput("Confirm password", "inputConfirmPassword", "password");
    elementInput("EMail", "inputEMail", "text");

    let button = document.createElement("input");
    button.classList.add("buttonReg");
    button.type = "submit";
    button.name = "button";
    button.onclick = send;
    button.value = "Register";
    form.append(button);

    elementDiv("output", elementContainer);

    elementHeaderOrFooter("footer", "Copyright by ..., 2016");
}
