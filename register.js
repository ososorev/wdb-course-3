document.addEventListener("DOMContentLoaded", createPage);
function createPage() {	
	
	let heading = document.createElement ("div");
	heading.innerHTML = "SUPER"+"\u00A0"+"NOTEBOOK";
	heading.id = "heading";
	heading.classList.add ("heading");
	document.body.append(heading);
	
	let the_form = document.createElement("form");
	document.body.append(the_form);
		
	let username = document.createElement ("input");
	username.type = "string";
	username.placeholder = "Username";
	username.name="username";
	username.classList.add ("class_input");
	the_form.append(username);
	username.insertAdjacentHTML("beforebegin", "<br/>");
	
	let password = document.createElement ("input");
	password.type = "password";
	password.placeholder = "Password";
	password.name="password";
	password.classList.add ("class_input");
	the_form.append(password);
	password.insertAdjacentHTML("beforebegin", "<br/>");
	
	let confirmPassword = document.createElement ("input");
	confirmPassword.type = "password";
	confirmPassword.placeholder = "Confirm password";
	confirmPassword.name="confirmPassword";
	confirmPassword.classList.add ("class_input");
	the_form.append(confirmPassword);
	confirmPassword.insertAdjacentHTML("beforebegin", "<br/>");
	
	let email = document.createElement ("input");
	email.type = "string";
	email.placeholder = "EMail";
	email.name="email";
	email.classList.add ("class_input");
	the_form.append(email);
	email.insertAdjacentHTML("beforebegin", "<br/>");
	
	let button = document.createElement ("button");
	button.innerHTML = "Register";
	button.id="button";
	button.onclick = function send(event){
		event.preventDefault();
		fetch("index.php",{method:"POST", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("heading").innerHTML=text;});
		};
	the_form.append(button);
	button.insertAdjacentHTML("beforebegin", "<br/>");
	
	let copyright = document.createElement ("div");
	copyright.innerHTML = "Copyright"+"\u00A0"+"by...,"+"\u00A0"+"2016";
	copyright.classList.add ("copyright");
	document.body.append(copyright);
}