function createPage() {	

	let form = document.createElement("form");
	
	this.inputElement = function (type, name, classList, placeholder) {
        let input = document.createElement("input");
        input.type = type;
        input.name = name;
        input.classList = classList;
        input.placeholder = placeholder;
        form.append(input);
		input.insertAdjacentHTML("beforebegin", "<br/>");
    };
	
	this.buttonElement = function (innerHTML) {
        let button = document.createElement("button");
        button.type = "button";
        button.onclick = function (){
			send(event);
		};
        button.innerHTML = innerHTML;
        form.append(button);
		button.insertAdjacentHTML("beforebegin", "<br/>");
    };
	
	document.body.append(form);
}

	form = new createPage();
	form.inputElement("text", "username", "class_input", "Username");
	form.inputElement("password", "password", "class_input", "Password");
	form.inputElement("password", "confirmPassword", "class_input", "Confirm password");
	form.inputElement("email", "email", "class_input", "EMail");
	form.buttonElement("Register");