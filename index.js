function create() {	

	let form = document.createElement("form");
	
	this.inputElement = function (type, name, classList, placeholder, id) {
        let input = document.createElement("input");
        input.type = type;
        input.name = name;
		input.id = id;
        input.classList = classList;
        input.placeholder = placeholder;
        form.append(input);
		input.insertAdjacentHTML("beforebegin", "<br/>");
    };
	
	this.buttonLogin = function (innerHTML) {
        let button = document.createElement("button");
        button.type = "button";
        button.onclick = function send(event){
			event.preventDefault();
			fetch("index.php",{method:"POST", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("head").innerHTML=text;});
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
	form.inputElement("text", "name", "class_input", "Username", "name");
	form.inputElement("password", "pass", "class_input", "Password", "password");
	form.buttonLogin("Login");
	form.buttonElement("Register");
