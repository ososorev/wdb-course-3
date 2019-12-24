
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
        frame.classList.add('mt-auto');
        frame.classList.add('py-3');
        frame.innerText = value;
        elementContainer.append(frame);
    }
})();