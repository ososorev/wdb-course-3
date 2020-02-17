document.addEventListener("DOMContentLoaded", createNewPage());
function createNewPage() { // функция передачи данных
	fetch("load_data.php").then(response => response.json()).then(json => {
		json.forEach(item => {
			addNewNoteLine(item)
		})
	})
};
function clearNoteContainer() { // функция очищения левого контйнера
    let element= document.getElementById('noteContainer');
    while (element.firstChild) {
        element.removeChild(element.firstChild);
    }
};
function clearEditContainer() { // функция очищения правого контйнера
	document.getElementById("addNewNote").removeAttribute("disabled"); // убираем блокировку с addNewNote
	let editContainer = document.getElementById("editContainer"); //получить элемент, имеющий id="editContainer"
	let lastNode = editContainer.lastChild; // получить последний дочерний узел у элемента editContainer
	while(lastNode && lastNode.nodeType!=1) { // для поиска последнего дочернего элемента у элемента editContainer, пока у элемента есть узел и его тип не равен 1 (т.е. он не элемент) выполнять
		lastNode = lastNode.previousSibling; // перейти к предыдущему узлу
	};
	if (lastNode) {
		lastNode.parentNode.removeChild(lastNode); // если у узла editContainer есть элемент, то его необходимо удалить
	};
};
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
	clearEditContainer();
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
			let data = new FormData();
			data.append("id", id);
			form = new editNoteElement();
			form.editMode();
			form.editInputElement("text", "recordTitle", "recordTitle", "form-control w-100 text-primary", recordTitle);
			form.editInputElement("date", "editDate", "editDate", "dateForm form-control-plaintext text-secondary", editDate);
			form.editInputElement("text", "contents", "contents", "contents form-control", contents);
			form.editButtonElement("Save", "btn btn-outline-success w-100");
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
				fetch("delete.php",{method:"POST", body: data})
				.then(clearNoteContainer)
				.then(createNewPage);
			};			
		};
		div.append(input);
	};
	noteContainer.appendChild(div);
};
function viewNote() { // функция отображения в режиме просмотра записи
	clearEditContainer();
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
	form.newButtonElement("Save", "btn btn-outline-success w-100");
};
function editNoteElement() { // функция создания и редактирования записи
	clearEditContainer();
	let id = event.target.parentNode.id; // передача id для кнопки save
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
	this.newButtonElement = function (innerHTML, classList) { // кнопка "Save"
        let button = document.createElement("button");
		button.type = "button";
		button.classList = classList;
		button.onclick = function send(event){
			document.getElementById("addNewNote").removeAttribute("disabled"); // убираем блокировку с кнопки "Add new note"
			event.preventDefault();
			let data = new FormData();
			data.append("id", id);
			fetch("save.php",{method:"POST", body:new FormData(document.forms[1])})
				.then(clearNoteContainer)
				.then(createNewPage);;
		};
        button.innerHTML = innerHTML;
        form.append(button);
		button.insertAdjacentHTML("beforebegin", "<p>");
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
	this.editButtonElement = function (innerHTML, classList) { // кнопка "Save"
        let button = document.createElement("button");
		button.type = "button";
		button.name = "save";
		button.id = "save";
		button.classList = classList;
		button.value = event.target.closest(".note").id; // перенос id
		button.onclick = function () {
			clickSave(event);
		};
        button.innerHTML = innerHTML;
        form.append(button);
		button.insertAdjacentHTML("beforebegin", "<p>");
    };
	editContainer.appendChild(form);
};
function clickSave(event){ // функция отправки для редактирования
    let data = {save: document.getElementById("save").value, 
				recordTitle: document.getElementById("recordTitle").value, 
				editDate: document.getElementById("editDate").value, 
				contents: document.getElementById("contents").value};
    event.preventDefault();
	fetch("edit.php",{method:"POST", headers: {'Content-Type': 'application/json'}, body: JSON.stringify(data)})
		.then(clearNoteContainer)
		.then(createNewPage);
};