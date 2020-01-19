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
        button.onclick = function send(event){
			event.preventDefault();
			fetch("register.php",{method:"POST", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("heading").innerHTML=text;});
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