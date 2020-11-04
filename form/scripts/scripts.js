// JavaScript Document

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
	fetch("notebook_edit.php",
		{method:"POST",
		headers: {'Content-Type': 'application/json'},
		body: JSON.stringify(data)})
			.then(response => response.json())
			.then(json => create_note_view(json))
};

function clickCreate(){
	event.preventDefault();
	fetch("notebook_create.php",
		{method:"POST", 
		body:new FormData(document.forms[1])})
			.then(clearNotes)
			.then(createPage)
			.then(clearField);
};

function clickDelete(event) {
	let id = event.target.closest(".note-row").id;
	let data = {note_id: id};
	fetch("notebook_delete.php",
		{method:"POST",
		headers: {'Content-Type': 'application/json'},
		body: JSON.stringify(data)})
			.then(clearNotes)
			.then(createPage)
			.then(clearField)
};

function getName(){
	fetch("notebook_username.php")
		.then(response => response.text())
		.then(text => {document.getElementById("div_hello").innerHTML="Hello "+ text;});
};

function clickSave(event){
	let data = {note_id: document.getElementById("save_button").value,
				note_name: document.getElementById("name_note").value,
				note_date: document.getElementById("date_note").value,
				note_text: document.getElementById("content_note").value};
	event.preventDefault();
	fetch("notebook_save.php",
		{method:"POST",
		headers: {'Content-Type': 'application/json'},
		body: JSON.stringify(data)})
			.then(clearNotes)
			.then(createPage)
			.then(clearField);
};

function findOnPage(event) {
event.preventDefault();
let notes = document.querySelectorAll('.notes_name_div');
let obj = window.document.getElementById("search");
let textToFind = obj.value.trim();
console.log(notes);
notes.forEach(note => {
	if (note.innerText.indexOf(textToFind) > -1) {
		note.style.backgroundColor = 'GreenYellow';
	}
})
};