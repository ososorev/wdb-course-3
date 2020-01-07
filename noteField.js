let marker = false; // метка для запуска функции только 1 раз

function addNewNote() {
//	global marker;
//    if(!marker) {
	let editContainer = document.getElementById("editContainer");
	form = new newNoteElement();
	form.inputElement("text", "recordTitle", "recordTitle", "form-control w-100 text-primary", "Note title");
	form.inputElement("date", "editDate", "editDate", "dateForm form-control-plaintext text-primary", "Date");
	form.inputElement("text", "contents", "contents", "contents form-control", "Contents");
	form.buttonElement("Save", "btn btn-outline-primary w-100");
//    marker = true;
//	}
}

function newNoteElement() {

	let editMode = document.createElement("h4");
	editMode.innerHTML = "Edit"+"\u00A0"+"mode";
	editMode.id = "item-1";
	document.body.append(editMode);
	editMode.insertAdjacentHTML("afterbegin", "<br/>");
		
	let form = document.createElement("form");
	
	this.inputElement = function (type, id, name, classList, placeholder) {
        let input = document.createElement("input");
        input.type = type;
        input.id = id;
		input.name = name;
        input.classList = classList;
        input.placeholder = placeholder;
        form.append(input);
		input.insertAdjacentHTML("beforebegin", "<br/>");
    };
	
	this.buttonElement = function (innerHTML, classList) {
        let button = document.createElement("button");
        button.type = "button";
		button.classList = classList;
        button.onclick = function (){
			send(event);
		};
        button.innerHTML = innerHTML;
        form.append(button);
		button.insertAdjacentHTML("beforebegin", "<br/>");
    };
	
	editContainer.appendChild(editMode);
	editContainer.appendChild(form);
}