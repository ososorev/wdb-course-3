document.addEventListener("DOMContentLoaded", createPage);

function send(event) {
    event.preventDefault();
    fetch("php/index.php", {method: "POST", body: new FormData(document.forms[0])})
        .then(response => response.text()).then(outputResult => {
           document.querySelector(".oshibka").innerHTML = outputResult;
    })
}
let forms = {};

(function(){
    forms.inputElement=inputElement;
    function inputElement (type, name, classList, placeholder, required, form) {
        let input = document.createElement("input");
        input.type = type;
        input.name = name;
        input.classList.add(classList);
        input.placeholder = placeholder;
        input.required = required;
        form.append(input);
    };
	forms.buttonElement=buttonElement;
	function buttonElement (classList, type, innerText, onclick, form) {
        let button = document.createElement("button");
        button.classList.add(classList);
        button.type = type;
        button.onclick = onclick;
        button.innerText = innerText;
        form.append(button);
    };
    forms.element=element;
	function element (classList, innerText, elementContainer) {
        let elementh = document.createElement("div");
        elementh.classList.add(classList);
        elementh.innerText = innerText;
        elementContainer.append(elementh);
    };
})();

function createPage() {	

    let elementContainer = document.createElement("div");
    elementContainer.classList.add("container");
    document.body.append(elementContainer);

    forms.element("header", "SUPER NOTEBOOK", elementContainer);

    let elementContent = document.createElement("div");
    elementContent.classList.add("content");
    elementContainer.append(elementContent);

    let form = document.createElement("form");
    elementContent.append(form);

	forms.inputElement("text", "username", "input", "Username", true, form);
	forms.inputElement("password", "password", "input", "Password", true, form);
	forms.inputElement("password", "confirmPassword", "input", "Confirm password", true, form);
	forms.inputElement("email", "email", "input", "EMail", false, form);
	forms.buttonElement("button", "submit", "Register", send, form);
	
    let oshibka = document.createElement("div");
    oshibka.classList.add("oshibka");
    form.append(oshibka);

    forms.element("footer", "Copyright by ..., 2016", elementContainer);
};

