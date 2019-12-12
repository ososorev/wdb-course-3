
(function () {
    App.ObjectForm = {};
    App.ObjectForm.addDivRowHeader = addDivRowHeader;
    App.ObjectForm.addDivHeader = addDivHeader;

    App.ObjectForm.addRowBody = addRowBody;
    App.ObjectForm.addFormToPage = addFormToPage;
    App.ObjectForm.addInputToForm = addInputToForm;
    App.ObjectForm.addDivErrorsToForm = addDivErrorsToForm;
    App.ObjectForm.addButton = addButton;
    App.ObjectForm.addDivSuccess = addDivSuccess;

    App.ObjectForm.addRowFooter = addRowFooter;
    App.ObjectForm.addDivFooter = addDivFooter;


    let rowHead = document.createElement("div"); // 3. Делаем строку для хедера
    function addDivRowHeader() {
        rowHead.className = "container contHead text-uppercase";
        document.body.append(rowHead);
    }

    function addDivHeader() {
        let header = document.createElement("div");
        header.className = "header col-lg-12";
        header.id = "head";
        header.innerText = "super notebook";
        rowHead.append(header);
    }

    let rowBody = document.createElement("div");
    function addRowBody() {
        rowBody.className = "container contBody";
        document.body.append(rowBody);
    }


    let form = document.createElement("form");
    form.setAttribute('method',"post");
    form.className = ("registration_form container-fluid column");

    function addInputToForm (type, name, placeholder, pattern) {
        let input = document.createElement("input");
        input.type = type;
        input.name = name;
        input.className = "registrationForm form-control form-control-lg col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2";
        input.placeholder = placeholder;
        input.pattern = pattern;
        form.append(input);
    }

    function addFormToPage(selector) {
        document.querySelector(selector).append(form); //  привязываемся к rowBody в файле generateRegForm.js
    }

    let errorCssClassName = "errors";
    function addDivErrorsToForm (classname) {
        let divErrors = document.createElement("div");
        divErrors.className = errorCssClassName + ' ' + classname;
        form.append(divErrors);
    }

    let messageOkClassName = "registration_result";  //задаем имя класса
    function addDivSuccess (classname) {
        let divOk = document.createElement("div");
        divOk.className = messageOkClassName + ' ' + classname;
        form.append(divOk);

    }
    function addButton(buttonValue, buttonName, onclick) {
        let button = document.createElement("input");
        button.type = "button";
        button.name = buttonName;
        button.className = "registrationForm btn btn-lg btn-primary btn-block col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2";
        button.value = buttonValue;
        button.onclick = function () {
            onclick(event);
        };
        form.append(button);
    }
    let rowFooter = document.createElement("div");
    function addRowFooter() {
        rowFooter.className = "container contFooter";
        document.body.append(rowFooter);
    }
    function addDivFooter() {
        let footer = document.createElement("div");
        footer.className = "header col-lg-12";
        footer.id = "foot";
        footer.innerText = "Copyright by Vasyankin, 2019";
        rowFooter.append(footer);
    }

})();