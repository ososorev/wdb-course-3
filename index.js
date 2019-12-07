function create() {	

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
	
	this.buttonLogin = function (innerHTML) {
        let button = document.createElement("button");
        button.type = "button";
        button.onclick = function (){
			send(event);
		};
        button.innerHTML = innerHTML;
        form.append(button);
		button.insertAdjacentHTML("beforebegin", "<br/>");
    };
	
	this.buttonElement = function (innerHTML) {
        let button = document.createElement("button");
        button.type = "button";
        button.onclick = function (){
			location.href = 'register.html';
		}
        button.innerHTML = innerHTML;
        form.append(button);
		button.insertAdjacentHTML("beforebegin", "<br/>");
    };
	
	document.body.append(form);
}

	form = new create();
	form.inputElement("text", "name", "class_input", "Username");
	form.inputElement("password", "pass", "class_input", "Password");
	form.buttonLogin("Login");
	form.buttonElement("Register");
