document.addEventListener ("DOMContentLoaded", createPage)
function createPage() {

	let lineup = document.createElement("div");
    lineup.classList.add("lineup");
	document.body.append(lineup);
	
    let up = document.createElement("div");
    up.classList.add("up");
    up.innerText = "super notebook";
	lineup.append(up);
	
	let info = document.createElement("div");
    info.classList.add("info");
	lineup.append(info);

	let form = document.createElement("form");
    form.id = "form";
    info.append(form);
	
    let username = document.createElement("Input");
	username.placeholder = "username";
	username.id="user";
	username.classList.add('Inn');	
	form.append(username);

	let password = document.createElement("Input");
	password.placeholder = "Password";
	password.id="pass";
	password.classList.add('Inn');	
	form.append(password);
	
	let confirm_password = document.createElement("Input");
	confirm_password.placeholder = "Confirm password";
	confirm_password.id="conf";
	confirm_password.classList.add('Inn');	
	form.append(confirm_password);
	
	let email = document.createElement("Input");
	email.placeholder = "E-mail";
	email.id="mail";
	email.classList.add('Inn');	
	form.append(email);

	let button = document.createElement("button");
	button.classList.add('Reg');	 
	button.onclick = "register";
	button.type = "submit";
	button.innerText = "Register";
	form.append(button);

	let linedown = document.createElement("div");
    linedown.classList.add("linedown");
	document.body.append(linedown);

	let down = document.createElement("div");
    down.classList.add("down");
    down.innerText = "Copyright by..., 2016";
    linedown.append(down);
}
