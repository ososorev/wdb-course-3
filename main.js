document.addEventListener("DOMContentLoaded", function () {
	fetch("load_data.php").then(response => response.json()).then(json => {
		json.forEach(item => {
			addNewNoteLine(item)
		})
	})
});
function addNewNoteLine(json_note) { // создание всех строчек записей в левом поле
	let noteLine = document.getElementById("noteContainer");
	form = new newNoteLine(json_note.id, json_note.recordTitle, json_note.editDate, json_note.contents);
	form.noteTitleDate("noteTitle", json_note.recordTitle);
	form.noteTitleDate("noteDate", json_note.editDate);
	form.noteEditor();
	form.noteDelete();
	noteLine.insertAdjacentHTML("beforeend", "<p/>");
};
function newNoteLine(id, recordTitle, editDate, contents) { // создание строчи записи
	let div = document.createElement("div");
	div.type = "div";
	div.id = id;
	div.classList = "note w-100";
		this.noteTitleDate = function (id, value) { // название и дата в строчке записи
		let input = document.createElement("input");
		input.type = "button";
		input.id = id;
		input.classList = "buttonNote";
		input.value = value;
		input.onclick = function (){
			form = new viewNote();
			form.viewMode(id);
			form.viewElement(id, recordTitle);
			form.viewElement(id, editDate);
			form.viewElement(id, contents);
	};
		div.append(input);
	};
	this.noteEditor = function () { // кнопка редактирования
		let input = document.createElement("input");
		input.type = "button";
		input.id = "noteEditor";
		input.classList = "buttonNote";
		input.value = "\u270E";
		input.onclick = function () {
			event.preventDefault();
			let idr = event.target.parentNode.id;
			let data = new FormData();
			data.append("id", id);
			form = new editNoteElement();
			form.editMode();
			form.editInputElement("text", "recordTitle", "recordTitle", "form-control w-100 text-primary", recordTitle);
			form.editInputElement("date", "editDate", "editDate", "dateForm form-control-plaintext text-secondary", editDate);
			form.editInputElement("text", "contents", "contents", "contents form-control", contents);
			form.buttonElement("Save", "btn btn-outline-success w-100");
		};
		div.append(input);
	};	
	this.noteDelete = function () { // кнопка удаления
		let input = document.createElement("input");
		input.type = "button";
		input.id = "noteDelete";
		input.classList = "buttonNote";
		input.value = "\u2716";
		input.onclick = function send(event){
			if (confirm("Delete note?")) {
				event.preventDefault();
				let id = event.target.parentNode.id;
				let data = new FormData();
				data.append("id", id);
				fetch("delete.php",{method:"POST", body: data}).then(response=>response.text()).then(text=>{document.getElementById("topRow").innerHTML=text;});
			};			
		};
		div.append(input);
	};
	noteContainer.appendChild(div);
};
function viewNote() { // функция отображения в режиме просмотра записи
	document.getElementById("addNewNote").removeAttribute("disabled"); // убираем блокировку с addNewNote
	let editContainer = document.getElementById("editContainer"); //получить элемент, имеющий id="editContainer"
	let lastNode = editContainer.lastChild; //получить последний дочерний узел у элемента editContainer
	while(lastNode && lastNode.nodeType!=1) { // для поиска последнего дочернего элемента у элемента editContainer, пока у элемента есть узел и его тип не равен 1 (т.е. он не элемент) выполнять
		lastNode = lastNode.previousSibling; //перейти к предыдущему узлу
	};
	if (lastNode) {
		lastNode.parentNode.removeChild(lastNode); //если у узла editContainer есть элемент, то его необходимо удалить
	};	
	let div = document.createElement("div");
	this.viewMode = function (id) { // заголовок "View Mode"
        let input = document.createElement("div");
		input.innerHTML = "<h4>"+"View"+"\u00A0"+"mode"+"</h4>";
		input.id = id;
		input.classList = "editMode";
        div.append(input);
		input.insertAdjacentHTML("afterend", "<br/>");
    };
	this.viewElement = function (id, innerHTML) { // отображение элементов просмотра записи
        let input = document.createElement("div");
        input.innerHTML = "<h5>"+innerHTML+"</h5>";
		input.id = id;
        div.append(input);
    };
	editContainer.appendChild(div);
};
function addNewNote() { // функция создания новой записи 
	form = new editNoteElement();
	form.editMode();
	form.newInputElement("text", "recordTitle", "recordTitle", "form-control w-100 text-primary", "Note title");
	form.newInputElement("date", "editDate", "editDate", "dateForm form-control-plaintext text-secondary", "Date");
	form.newInputElement("text", "contents", "contents", "contents form-control", "Contents");
	form.buttonElement("Save", "btn btn-outline-success w-100");
};
function editNoteElement() { // функция создания и редактирования записи
	document.getElementById("addNewNote").removeAttribute("disabled"); // убираем блокировку с кнопки "Add new note"
	let editContainer = document.getElementById("editContainer"); //получить элемент, имеющий id="editContainer"
	let lastNode = editContainer.lastChild; // получить последний дочерний узел у элемента editContainer
	while(lastNode && lastNode.nodeType!=1) { // для поиска последнего дочернего элемента у элемента editContainer, пока у элемента есть узел и его тип не равен 1 (т.е. он не элемент) выполнять
		lastNode = lastNode.previousSibling; // перейти к предыдущему узлу
	};
	if (lastNode) {
		lastNode.parentNode.removeChild(lastNode); // если у узла editContainer есть элемент, то его необходимо удалить
	};
	let id = event.target.parentNode.id;
	let form = document.createElement("form");
	this.editMode = function () { // заголовок "Edit Mode"
        let input = document.createElement("div");
		input.innerHTML = "<h4>"+"Edit"+"\u00A0"+"mode"+"</h4>";
		input.classList = "editMode";
        form.append(input);
    };
	this.newInputElement = function (type, id, name, classList, placeholder) { // функция отрисовки в правом поле при создании новой записи
        let input = document.createElement("input");
        input.type = type;
        input.id = id;
		input.name = name;
        input.classList = classList;
        input.placeholder = placeholder;
        form.append(input);
		input.insertAdjacentHTML("beforebegin", "<p>");
    };
	this.editInputElement = function (type, id, name, classList, value) { // функция отрисовки в правом поле при редактировании записи
        let input = document.createElement("input");
        input.type = type;
        input.id = id;
		input.name = name;
        input.classList = classList;
        input.value = value;
        form.append(input);
		input.insertAdjacentHTML("beforebegin", "<p>");
    };
	this.buttonElement = function (innerHTML, classList) { // кнопка "Save"
        let button = document.createElement("button");
        button.type = "button";
		button.classList = classList;
        button.onclick = function send(event){
			document.getElementById("addNewNote").removeAttribute("disabled"); // убираем блокировку с кнопки "Add new note"
			event.preventDefault();
			let id = event.target.parentNode.id;
			let data = new FormData();
			data.append("id", id);
			fetch("edit.php",{method:"POST", body:new FormData(document.forms[1])}).then(response=>response.text()).then(text=>{document.getElementById("topRow").innerHTML=text;});
		};
        button.innerHTML = innerHTML;
        form.append(button);
		button.insertAdjacentHTML("beforebegin", "<p>");
    };
	editContainer.appendChild(form);
};
function logout() { // функция выхода
	event.preventDefault();
	let data = new FormData();
	fetch("logout.php",{method:"POST", body: data}).then(response=>response.text()).then(text=>{document.getElementById("topRow").innerHTML=text;});
};