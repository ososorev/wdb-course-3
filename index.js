function createPageIndex() {	
	form = new create();
	form.inputElement("text", "name", "classInput col-sm-3 form-control text-primary", "Username", "name");
	form.inputElement("password", "pass", "classInput col-sm-3 form-control text-primary", "Password", "password");
	form.buttonElement("Login", "classInput col-sm-3 btn btn-outline-dark", sendLogin);
	form.buttonElement("Register", "classInput col-sm-3 btn btn-outline-dark", locationRegistration);
};
function createPageRegistration() {	
	form = new create();
	form.inputElement("text", "username", "classInput col-sm-3 form-control text-primary", "Username", "username");
	form.inputElement("password", "password", "classInput col-sm-3 form-control text-primary", "Password", "password");
	form.inputElement("password", "confirmPassword", "classInput col-sm-3 form-control text-primary", "Confirm password", "confirmPassword");
	form.inputElement("email", "email", "classInput col-sm-3 form-control text-primary", "EMail", "email");
	form.buttonElement("Register", "classInput col-sm-3 btn btn-outline-dark", sendRegistration);
};
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
		input.insertAdjacentHTML("beforebegin", "<p>");
    };
	this.buttonElement = function (innerHTML, classList, onclick) {
        let button = document.createElement("button");
        button.type = "button";
		button.classList = classList;
        button.onclick = onclick;
        button.innerHTML = innerHTML;
        form.append(button);
		button.insertAdjacentHTML("beforebegin", "<br/>");
    };
	document.body.append(form);
};
function sendLogin(event){
	event.preventDefault();
	fetch("index.php",{method:"POST", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("topRow").innerHTML=text;});
};
function locationRegistration(){
	location.href = 'register.html';
	};
function sendRegistration(event){
	event.preventDefault();
	fetch("register.php",{method:"POST", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("topRow").innerHTML=text;});
};