function ObjectForm(){
    let form = document.createElement("form");
    form.setAttribute('method',"post");
    form.className ="registration__form flexContainer column";

    let inputCssClassName = "registration__form__item";
    let errorCssClassName = "errors";

    this.addInputToForm = function (type, name, placeholder) {
        let input = document.createElement("input");
        input.type = type;
        input.name = name;
        input.className = inputCssClassName;
        input.placeholder = placeholder;
        form.append(input);
    };

     this.addDivErrorsToForm = function (classname) {
         let divErrors = document.createElement("div");
         divErrors.className = errorCssClassName + ' ' + classname;
         form.append(divErrors);
     };

     this.addRegisterButton = function () {
         let button = document.createElement("input");
         button.type = "button";
         button.name = "register";
         button.className = "registration__form__item button";
         button.value = "Register";
         button.onclick = function (){
             sendToServer(event);
         };
         form.append(button);
     };

     this.addFormToPage = function (selector){
        document.querySelector(selector).append(form);
    };


}


form = new ObjectForm();

form.addInputToForm('text', 'username', "Username");
form.addDivErrorsToForm('error_username');
form.addInputToForm('password', 'password', 'Password');
form.addInputToForm('password', 'confirmPass', 'Confirm password');
form.addDivErrorsToForm('error_password');
form.addInputToForm('email', 'email', 'Email');
form.addDivErrorsToForm('error_email');
form.addRegisterButton();
form.addFormToPage(".registration" );

