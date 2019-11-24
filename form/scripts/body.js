// JavaScript Document

var App = {};
(function (){
	App.input={}
	App.input.create= create;
	let input_type;
	let	input_name;
	let input_id;
	let input_className;
	let input_value;
	let input_onclick;
	let input_placeholder;
	
	function create(input_type, input_name, input_id, input_className, input_value, input_onclick, input_placeholder){
		let element=document.createElement("input");
			element.type= input_type;
			element.name= input_name;
			element.id= input_id;
			element.className= input_className;
			element.value= input_value;
			element.onclick= input_onclick;
			element.placeholder= input_placeholder;
		return element;
	}
}
)();

(function (){
	App.div={}
	App.div.create= create;
	let div_id;
	let div_className;
	let div_innerHTML;
	
	function create(div_id, div_className, div_innerHTML){
		let element=document.createElement("div");
			element.id=div_id;
			element.className=div_className;
			element.innerHTML=div_innerHTML;
		
		return element;
}
}
)();


function createPage(){
	
let form_first= document.createElement("form");
let div_main = App.div.create("main", "", "");
	
let div_strip_start= App.div.create("strip_start", "strip", "SUPER NOTEBOOK");
	
let div_inputs= App.div.create("", "", "");
let input_username= App.input.create("", "username", "id_username", "inputs", "", "", " Username");
let input_pass= App.input.create("password", "password", "id_password", "inputs", "", "", " Password")
let input_pass_confrim= App.input.create("password", "pass_confrim", "id_pass_confrim", "inputs", "", "", " Confrim password");
let input_mail= App.input.create("", "mail", "id_mail", "inputs", "", "", " Email");
let input_button= App.input.create("submit", "button", "button_reg", "inputs", "Register", send, "");
let div_strip_end= App.div.create("strip_end", "strip", "Copyright by ..., 2016");

form_first.append(input_username);
	form_first.insertAdjacentHTML('afterBegin', '<p>');
	form_first.insertAdjacentHTML('beforeEnd', '</p><p>');
form_first.append(input_pass);
	form_first.insertAdjacentHTML('beforeEnd', '</p><p>');
form_first.append(input_pass_confrim);
	form_first.insertAdjacentHTML('beforeEnd', '</p><p>');
form_first.append(input_mail);
	form_first.insertAdjacentHTML('beforeEnd', '</p><p>');
form_first.append(input_button);
	form_first.insertAdjacentHTML('beforeEnd', '<p>');
div_inputs.append(form_first);
	
div_main.append(div_strip_start);
div_main.append(div_inputs);
div_main.append(div_strip_end);
	
document.body.append(div_main);
};

//function createPage(){
//	
//	let form_first=document.createElement("form");
//	
//	let div_main=document.createElement("div");
//	div_main.id="main";
//			
//		let div_strip_start=document.createElement("div");
//		div_strip_start.id="strip_start";
//		div_strip_start.className="strip";
//		div_strip_start.innerHTML="SUPER NOTEBOOK";
//
//		div_main.append(div_strip_start);
//				
//		let div_inputs=document.createElement("div");
//			
//			let input_username=document.createElement("input");
//			input_username.name="username";
//			input_username.className="inputs";
//			input_username.placeholder=" Username";
//
//		div_inputs.append(input_username);
//
//		div_inputs.insertAdjacentHTML('afterBegin', '<p>');
//		div_inputs.insertAdjacentHTML('beforeEnd', '</p><p>');	
//
//			let input_pass=document.createElement("input");
//			input_pass.name="password";
//			input_pass.className="inputs";
//			input_pass.type="password";
//			input_pass.placeholder=" Password";
//
//		div_inputs.append(input_pass);
//		div_inputs.insertAdjacentHTML('beforeEnd', '</p><p>');
//
//			let input_pass_confrim=document.createElement("input");
//			input_pass_confrim.name="pass_confrim";
//			input_pass_confrim.className="inputs";
//			input_pass_confrim.type="password";
//			input_pass_confrim.placeholder=" Confrim password";
//
//		div_inputs.append(input_pass_confrim);
//		div_inputs.insertAdjacentHTML('beforeEnd', '</p><p>');
//
//			let input_mail=document.createElement("input");
//			input_mail.name="mail";
//			input_mail.className="inputs";
//			input_mail.placeholder=" Email";
//
//		div_inputs.append(input_mail);
//		div_inputs.insertAdjacentHTML('beforeEnd', '</p><p>');
//
//			let input_button=document.createElement("input");
//			input_button.type="submit";
//			input_button.name="button";
//			input_button.id="button_reg";
//			input_button.className="inputs";
//			input_button.value="Register";
//			input_button.onclick = 	function (){send(event)};
//
//		div_inputs.append(input_button);
//		div_inputs.insertAdjacentHTML('beforeEnd', '<p>');			
//	form_first.append(div_inputs);
//	div_main.append(form_first);
//
//
//		let div_strip_end=document.createElement("div");
//		div_strip_end.id="strip_end";
//		div_strip_end.className="strip";
//		div_strip_end.innerHTML="Copyright by ..., 2016";
//
//	div_main.append(div_strip_end);
//	
//	
//	document.body.append(div_main);
//}
//
function send(event){
	event.preventDefault();
	fetch("users_reg.php",{method:"POST", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("strip_start").innerHTML=text;});
};