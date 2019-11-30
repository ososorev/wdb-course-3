let App = {}; 
document.addEventListener("DOMContentLoaded", start);


let forms = {};

(function(){
    forms.formElement=formElement;
    function formElement(parent) {
        let form = document.createElement("form");
        parent.append(form);
    }
    forms.inputElement=inputElement;
    function inputElement(placeholder, user, type, form) {
        let elementInput = document.createElement("input");
        elementInput.placeholder = placeholder;
        elementInput.name = user;
        elementInput.classList.add("input");
        elementInput.type = type;
        elementInput.required = true;
        form.append(elementInput);
    }
    forms.buttonElement=buttonElement;
    function buttonElement(form) {
        let button = document.createElement("input");
        button.classList.add("register");
        button.type = "submit";
        button.onclick = send;
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
    Container.classList.add("content");
    document.body.append(Container);

    forms.frame("header", "SUPER NOTEBOOK", Container);

    let elementContent = document.createElement("div");
    Container.append(elementContent);

    let form = document.createElement("form");
    form.method = "POST";
    elementContent.append(form);

    forms.inputElement("Username","user","text",form);
    forms.inputElement("Password","Password","password",form);
    forms.inputElement("Pass_con","Pass_con","password",form);
    forms.inputElement("Email", "Email", "Email", form);

    forms.buttonElement(form);

    forms.frame("footer", "Copyright by ..., 2016", Container);
};
