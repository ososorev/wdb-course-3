let App = {}; // всё складываем сюда

function send(event) {
    event.preventDefault();
    fetch("register.php", {method: "POST", body: new FormData(document.forms[0])})
        .then(response => response.text()).then(outputResult => {
        document.querySelector(".output").innerHTML = outputResult;
    })
}
let forms = {};
(function(){
    forms.divElement=divElement;
    function divElement(className, parent) {
        let elementDiv = document.createElement("div");
        elementDiv.classList.add(className);
        parent.append(elementDiv);
    }
    forms.formElement=formElement;
    function formElement(parent) {
        let form = document.createElement("form");
        form.id = "form";
        form.classList.add("formBlock");
        form.method = "POST";
        parent.append(form);
    }
    forms.inputElement=inputElement;
    function inputElement(placeholder, name, type, form) {
        let elementInput = document.createElement("input");
        elementInput.placeholder = placeholder;
        elementInput.classList.add("inputForm");
        elementInput.name = name;
        elementInput.type = type;
        elementInput.required = true;
        //return elementInput;
        form.append(elementInput);
    }
    forms.buttonElement=buttonElement;
    function buttonElement(form) {
        let button = document.createElement("input");
        button.classList.add("buttonReg");
        button.type = "submit";
        button.name = "button";
        button.onclick = send;
        button.value = "Register";
        form.append(button);
    }
    forms.headerOrFooterElement=headerOrFooterElement;
    function headerOrFooterElement(different, value, elementContainer) {
        let elementHeaderOrFooter = document.createElement("div");
        elementHeaderOrFooter.classList.add("header", different);
        elementHeaderOrFooter.innerText = value;
        elementContainer.append(elementHeaderOrFooter);
    }
})();

(function(){
    App.start = start;
    function start() {
        let elementContainer = document.createElement("div");
        elementContainer.classList.add('container');
        document.body.append(elementContainer);
        //forms.divElement("container", document.body);

        forms.headerOrFooterElement("header", "SUPER NOTEBOOK", elementContainer);

        let elementContent = document.createElement("div");
        elementContent.classList.add("content");
        elementContainer.append(elementContent);
        // forms.divElement("content", elementContainer);

        let form = document.createElement("form");
        form.id = "form";
        form.classList.add("formBlock");
        form.method = "POST";
        elementContent.append(form);
        // forms.formElement(elementContent);

        forms.inputElement("Username", "inputUsername", "text", form);
        // let element = forms.inputElement("Username", "inputUsername", "text");
        //form.append(element);
        forms.inputElement("Password", "inputPassword", "password", form);
        forms.inputElement("Confirm password", "inputConfirmPassword", "password", form);
        forms.inputElement("EMail", "inputEMail", "text", form);

        forms.buttonElement(form);

        forms.divElement("output", elementContainer);

        forms.headerOrFooterElement("footer", "Copyright by ..., 2016", elementContainer);
    }
})();

document.addEventListener("DOMContentLoaded", App.start);
