let form = document.createElement("form");
form.setAttribute('method',"post");
form.className ="registration__form flexContainer column";

let username = document.createElement("input");
username.type = "text";
username.name = "username";
username.className = "registration__form__item";
username.placeholder = "Username";

let userNameError = document.createElement("div");
userNameError.className = "errors error_username";

let password = document.createElement("input");
password.type = "password";
password.name = "password";
password.className = "registration__form__item";
password.placeholder = "Password";

let confirmPass = document.createElement("input");
confirmPass.type = "password";
confirmPass.name = "confirmPass";
confirmPass.className = "registration__form__item";
confirmPass.placeholder = "Confirm password";

let passwordError = document.createElement("div");
passwordError.className = "errors error_password";

let email = document.createElement("input");
email.type = "email";
email.name = "email";
email.className = "registration__form__item";
email.placeholder = "Email";

let emailError = document.createElement("div");
emailError.className = "errors error_email";

let button = document.createElement("input");
button.type = "button";
button.name = "register";
button.className = "registration__form__item button";
button.value = "Register";
button.onclick = function (){
    sendToServer(event);
};

form.append(username);
form.append(userNameError);
form.append(password);
form.append(confirmPass);
form.append(passwordError);
form.append(email);
form.append(emailError);
form.append(button);


document.querySelector(".registration").append(form);
