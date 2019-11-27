(function () {
    App.ObjectForm = {};
    App.ObjectForm.addInputToForm = addInputToForm;
    App.ObjectForm.addFormToPage = addFormToPage;
    App.ObjectForm.addDivErrorsToForm = addDivErrorsToForm;
    App.ObjectForm.addButton = addButton;
    App.ObjectForm.addClassToForm = addClassToForm;

    let form = document.createElement("form");
    form.setAttribute('method',"post");


    function addClassToForm(formClassName){
        form.className = formClassName;
    }

    let inputCssClassName = "registration__form__item";
    let errorCssClassName = "errors";

    function addInputToForm (type, name, placeholder) {
        let input = document.createElement("input");
        input.type = type;
        input.name = name;
        input.className = inputCssClassName;
        input.placeholder = placeholder;
        form.append(input);
    }

    function addFormToPage(selector) {
        document.querySelector(selector).append(form);
    }

    function addDivErrorsToForm (classname) {
        let divErrors = document.createElement("div");
        divErrors.className = errorCssClassName + ' ' + classname;
        form.append(divErrors);
    }

    function addButton(buttonValue, buttonName, onclick) {
        let button = document.createElement("input");
        button.type = "button";
        button.name = buttonName;
        button.className = "registration__form__item button";
        button.value = buttonValue;
        button.onclick = function () {
            onclick(event);
        }
        form.append(button);
    }



})();