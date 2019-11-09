document.addEventListener("DOMContentLoaded", createPage);
function createPage() {	
	let heading = document.createElement ("div");
	heading.innerHTML = "SUPER"+"\u00A0"+"NOTEBOOK";
	heading.classList.add ("heading");
	document.body.append(heading);
		
	let username = document.createElement ("input");
	username.type = "string";
	username.placeholder = "Username";
	username.classList.add ("class_input");
	document.body.append(username);
	username.insertAdjacentHTML("beforebegin", "<br/>");
	
	let password = document.createElement ("input");
	password.type = "password";
	password.placeholder = "Password";
	password.classList.add ("class_input");
	document.body.append(password);
	password.insertAdjacentHTML("beforebegin", "<br/>");
	
	let confirmPassword = document.createElement ("input");
	confirmPassword.type = "password";
	confirmPassword.placeholder = "Confirm password";
	confirmPassword.classList.add ("class_input");
	document.body.append(confirmPassword);
	confirmPassword.insertAdjacentHTML("beforebegin", "<br/>");
	
	let email = document.createElement ("input");
	email.type = "string";
	email.placeholder = "EMail";
	email.classList.add ("class_input");
	document.body.append(email);
	email.insertAdjacentHTML("beforebegin", "<br/>");
	
	let button = document.createElement ("button");
	button.innerHTML = "Register";
	document.body.append(button);
	button.insertAdjacentHTML("beforebegin", "<br/>");
	
	let copyright = document.createElement ("div");
	copyright.innerHTML = "Copyright"+"\u00A0"+"by...,"+"\u00A0"+"2016";
	copyright.classList.add ("copyright");
	document.body.append(copyright);
}