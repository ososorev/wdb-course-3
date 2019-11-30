let App = {}; 
document.addEventListener("DOMContentLoaded", start);


let forms = {};

(function(){
    forms.divElement=divElement;
    function divElement(className, parent) {
        let elementDiv = document.createElement("div");
        parent.append(elementDiv);
    }
    forms.formElement=formElement;
    function formElement(parent) {
        let form = document.createElement("form");
        parent.append(form);
    }
    forms.inputElement=inputElement;
    function inputElement(placeholder, name, type, form) {
        let elementInput = document.createElement("input");
        elementInput.placeholder = placeholder;
        elementInput.name = name;
        elementInput.classList.add("input");
        elementInput.type = type;
        elementInput.required = true;
        form.append(elementInput);
    }
    forms.buttonElement=buttonElement;
    function buttonElement(type,value,click,form) {
        let button = document.createElement("button");
        button.classList.add("register");
        button.type = type;
        button.innerText = value;
        button.onclick = click;
        form.append(button);
    }
    forms.frame=frame;
    function frame(different, value, elementContainer) {
        let frame = document.createElement("div");
        frame.classList.add(different);
        frame.innerText = value;
        elementContainer.append(frame);
    }
})();

function start() {
    let Container = document.createElement("div");
    document.body.append(Container);

    forms.frame("header", "SUPER NOTEBOOK", Container);

    let elementContent = document.createElement("div");
    Container.classList.add("content");
    Container.append(elementContent);

    let form = document.createElement("form");
    elementContent.append(form);

    forms.inputElement("Username","user","name",form);
    forms.inputElement("Password","psw","password",form);

    forms.buttonElement("Submit","Login",send,form);
    forms.buttonElement("Button","Registration",registr,form);

    forms.frame("footer", "Copyright by ..., 2016", Container);
};
