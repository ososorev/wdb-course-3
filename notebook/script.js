document.addEventListener("DOMContentLoaded", createPage);

function createPage() {
    let username_input=document.createElement("input");
    username_input.id = "username"
    username_input.type = "text"
    username_input.classList.add("name_input")
    username_input.size = "40"
    username_input.placeholder = "username"

    document.body.append(username_input);


    let password_input=document.createElement("input");
    password_input.id = "password"
    password_input.type = "text"
    password_input.classList.add("password_input")
    password_input.size = "40"
    password_input.placeholder = "password"

    document.body.append(password_input);

    let sign_in=document.createElement("button");
    sign_in.classList.add("b1")
    sign_in.innerHTML="Sign in"
    // sign_in.onclick = function(){calc()};
    document.body.append(sign_in);

    let sign_up=document.createElement("button");
    sign_up.classList.add("b1")
    sign_up.innerHTML="Sign up"
    // sign_in.onclick = function(){calc()};
    document.body.append(sign_up);

}
