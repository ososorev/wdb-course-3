let form = document.createElement("form");
form.setAttribute('method',"post");
form.className ="registration__form flexContainer column";

let username = document.createElement("input");
username.type = "text";
username.name = "username";
username.className = "registration__form__item";
username.placeholder = "Username";

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

let email = document.createElement("input");
email.type = "email";
email.name = "email";
email.className = "registration__form__item";
email.placeholder = "Email";

let button = document.createElement("input");
button.type = "button";
button.name = "register";
button.className = "registration__form__item button";
button.value = "Register";

form.append(username);
form.append(password);
form.append(confirmPass);
form.append(email);
form.append(button);


document.querySelector(".registration").append(form);
