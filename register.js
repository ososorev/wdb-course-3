function createPage() {	

	let form = document.createElement("form");
	
//	let heading = document.createElement ("div");
//	heading.innerHTML = "SUPER"+"\u00A0"+"NOTEBOOK";
//	heading.id = "heading";
//	heading.classList.add ("heading");
//	document.body.append(heading);
			
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
	
	let copyright = document.createElement ("div");
	copyright.innerHTML = "Copyright"+"\u00A0"+"by...,"+"\u00A0"+"2016";
	copyright.classList.add ("copyright");
	document.body.append(copyright);
	
	document.body.append(form);
}

	form = new createPage();
	form.inputElement("text", "username", "class_input", "Username");
	form.inputElement("password", "password", "class_input", "Password");
	form.inputElement("password", "confirmPassword", "class_input", "Confirm password");
	form.inputElement("email", "email", "class_input", "EMail");
	form.buttonElement("Register");