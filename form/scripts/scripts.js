// JavaScript Document
//document.addEventListener("DOMContentLoaded", createPage);

//function send(event){
//	event.preventDefault();
//	fetch("users_check.php",{method:"POST", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("strip_start").innerHTML=text;});
//};
document.addEventListener("DOMContentLoaded", createPageFirst());

function createPageFirst(){
	fetch("notebook.php")
		.then(response => response.json())
		.then(json => {
		json.forEach(item => {
			create_note_line(item)
		})
	})
		.then(getName)
};
	

function createPage() {	
	fetch("notebook.php")
		.then(response => response.json())
		.then(json => {
		json.forEach(item => {
			create_note_line(item)
		})
	})
};

function clickEdit(event) {
	let id = event.target.closest(".note-row").id;
	let data = {note_id: id};
	fetch("notebook_edit.php",{method:"POST",
		headers: {'Content-Type': 'application/json'},
		body: JSON.stringify(data)})
		.then(response => response.json())
		.then(json => create_note_edit(json))
};

function clickView(event) {
	let id = event.target.closest(".note-row").id;
	let data = {note_id: id};
	fetch("notebook_edit.php",{method:"POST",
		headers: {'Content-Type': 'application/json'},
		body: JSON.stringify(data)})
		.then(response => response.json())
		.then(json => create_note_view(json))
};

//function clickSave(event){
//	event.preventDefault();
//	fetch("notebook_save.php",{method:"POST", body:new FormData(document.forms[1])})
//		.then(clearNotes)
//		.then(createPage);
//};

function clickCreate(){
	event.preventDefault();
	fetch("notebook_create.php",{method:"POST", body:new FormData(document.forms[1])})
		.then(clearNotes)
		.then(createPage)
		.then(clearField);
};

function clickDelete(event) {
	let id = event.target.closest(".note-row").id;
	let data = {note_id: id};
	fetch("notebook_delete.php",{method:"POST",
		headers: {'Content-Type': 'application/json'},
		body: JSON.stringify(data)})
		.then(clearNotes)
		.then(createPage)
		.then(clearField)
};

function getName(){
	fetch("notebook_username.php")
		.then(response => response.text())
		.then(text => {document.getElementById("div_hello").innerHTML="Hello "+text;});
};

function clickSave(event){
	let data = {note_id: document.getElementById("save_button").value,
			   	note_name: document.getElementById("name_note").value,
				note_date: document.getElementById("date_note").value,
				note_text: document.getElementById("content_note").value};
	event.preventDefault();
	fetch("notebook_save.php",{method:"POST",
		headers: {'Content-Type': 'application/json'},
		body: JSON.stringify(data)})
		.then(clearNotes)
		.then(createPage)
		.then(clearField);
};

//function searchNotes(){
//	event.preventDefault();
//	let result = document.getElementById("search").value;
//	let elem = document.getElementById('notes_container');
//		for (let i = 0; i < elem.children.length; i++) {
//      		if (result == elem.children[i].firstChild.firstChild.innerHTML){
//				elem.children[i].firstChild.firstChild.innerHTML.style='background:red';
//			}
//		} 
//};

var lastResFind=""; // последний удачный результат
var copy_page=""; // копия страницы в ихсодном виде
function TrimStr(s) {
     s = s.replace( /^\s+/g, '');
  return s.replace( /\s+$/g, '');
};

function FindOnPage() {//ищет текст на странице, в параметр передается ID поля для ввода
var obj = window.document.getElementById("search");
	
var textToFind;
	if (obj) {
		textToFind = TrimStr(obj.value);//обрезаем пробелы
	} 
	else {
		alert("Введенная фраза не найдена");
		return;
	}
	if (textToFind == "null") {
		alert("Вы ничего не ввели");
		return;
	}
	if(document.body.innerHTML.indexOf(textToFind)=="-1");
	if(copy_page.length>0)
		document.body.innerHTML=copy_page;
	else copy_page=document.body.innerHTML;

	document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");
	document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<span name="+textToFind+" style='background-color:green'>"+textToFind+"</span>");
	lastResFind=textToFind;
	window.location = '#'+textToFind;
};