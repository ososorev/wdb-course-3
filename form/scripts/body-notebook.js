// JavaScript Document

var App 	= {};
var marker 	= false;
(function (){
	App.input			= {}
	App.input.create	= create;
	
	function create(input_type, input_name, input_id, input_className, input_value, input_onclick, input_placeholder){
		let element				= document.createElement("input");
			element.type		= input_type;
			element.name		= input_name;
			element.id			= input_id;
			element.className	= input_className;
			element.value		= input_value;
			element.onclick		= input_onclick;
			element.placeholder	= input_placeholder;
		return element;
	}
}
)();

(function (){
	App.div={}
	App.div.create= create;
	
	function create(div_id, div_className, div_innerHTML){
		let element				= document.createElement("div");
			element.id			= div_id;
			element.className	= div_className;
			element.innerHTML	= div_innerHTML;
		
		return element;
}
}
)();

(function (){
	App.button={}
	App.button.create= create;
	
	function create(button_type, button_name, button_id, button_className, button_onclick, button_innerHTML){
		let element				= document.createElement("button");
			element.type		= button_type;
			element.name		= button_name;
			element.id			= button_id;
			element.className	= button_className;
			element.onclick		= button_onclick;
			element.innerHTML	= button_innerHTML;
		return element;
	}
}
)();

(function (){
	App.hr			= {}
	App.hr.create	= create;
	
	function create(hr_className){
		let element				= document.createElement("hr");
			element.className	= hr_className;
		
		return element;
}
}
)();

(function (){
	App.textarea={}
	App.textarea.create= create;
	
	function create(textarea_name, textarea_id, textarea_className, textarea_placeholder, textarea_value){
		let element				= document.createElement("textarea");
			element.name		= textarea_name;
			element.id			= textarea_id;
			element.className	= textarea_className;
			element.placeholder	= textarea_placeholder;
			element.value		= textarea_value;
		return element;
	}
}
)();

function create_note_line(json){		//создание линии с заметкой
	let div_notes				= App.div.create(json.id,"notes_div note-row","");
	let butt_notes				= App.button.create("","","","notes_but", view,"");
	let div_name				= App.div.create("","notes_name_div", json.post_name);
	let div_date				= App.div.create("", "notes_date_div", json.date);
	let butt_pen				= App.button.create("submit", "", "","notes_butt_pen", edit, "");
	let butt_del				= App.button.create("submit", "", "","notes_butt_del", noteDelete, "");
	
	let note_line= document.getElementById("notes_container");
	butt_notes.appendChild(div_name);
	butt_notes.appendChild(div_date);
	div_notes.appendChild(butt_notes);
	div_notes.appendChild(butt_pen);
	div_notes.appendChild(butt_del);
	note_line.appendChild(div_notes);

};

function createNote(){				//создание пустого поля для новой заметки

	let div_status= App.div.create("", "status_div", "New Note");
	let hr= App.hr.create("line_hr");
	let div_note_edit= App.div.create("", "note_edit_div", "");
	let input_note_name = App.input.create("", "note_name", "", "note_name_edit_input", "", "", "Name");
	let input_note_date = App.input.create("date", "note_date", "", "note_date_edit_input", "", "", "Date");
	let textarea= App.textarea.create("note_text", "", "note_text_edit_input", "Text", "");
	let button_save= App.button.create("submit", "button_save", "", "note_save_but", create, "Save");
	let div_conteiner=App.div.create("note", "", "");
	
	let note_container= document.getElementById("content_right");	
	div_note_edit.appendChild(input_note_name);
	div_note_edit.appendChild(input_note_date);
	div_note_edit.appendChild(textarea);
	div_note_edit.appendChild(button_save);
	
	clearField();
	
	div_conteiner.appendChild(div_status);
	div_conteiner.appendChild(hr);
	div_conteiner.appendChild(div_note_edit);
	note_container.appendChild(div_conteiner);
	
};

function create_note_edit(json){   //создание поля с заметкой для редактирования
	
	let div_status				= App.div.create("", "status_div", "Edit mode");
	let hr= App.hr.create("line_hr");
	let div_note_edit			= App.div.create("", "note_edit_div", "");
	let input_note_name			= App.input.create("", "note_name", "name_note", "note_name_edit_input", json.post_name, "", "Name");
	let input_note_date			= App.input.create("date", "note_date", "date_note", "note_date_edit_input", json.date, "", "Date");
	let textarea				= App.textarea.create("note_text", "content_note", "note_text_edit_input", "Text", json.content);
	let button_save				= App.button.create("submit", "button_save", "save_button", "note_save_but", save, "Save");
	let div_conteiner			= App.div.create("note", "", "");
	
	let note_container= document.getElementById("content_right");	
	div_note_edit.appendChild(input_note_name);
	div_note_edit.appendChild(input_note_date);
	div_note_edit.appendChild(textarea);
	div_note_edit.appendChild(button_save);
	button_save.value= json.id;
	
	clearField();
	
	div_conteiner.appendChild(div_status);
	div_conteiner.appendChild(hr);
	div_conteiner.appendChild(div_note_edit);
	note_container.appendChild(div_conteiner);
	
};

function create_note_view(json){   //создание поля с заметкой для просмотра
	
	let div_status				= App.div.create("", "status_div", "View mode");
	let hr						= App.hr.create("line_hr");
	let div_note_edit			= App.div.create("", "note_edit_div", "");
	let input_note_name			= App.input.create("", "note_name", "", "note_name_view_input", json.post_name, "", "Name");
	let input_note_date			= App.input.create("", "note_date", "", "note_date_view_input", json.date, "", "Date");
	let textarea				= App.textarea.create("note_text", "", "note_text_view_input", "Text", json.content);
	let div_conteiner			= App.div.create("note", "", "");
	input_note_name.readOnly	= true;
	input_note_date.readOnly	= true;
	textarea.readOnly			= true;
	
	let note_container= document.getElementById("content_right");	
	div_note_edit.appendChild(input_note_name);
	div_note_edit.appendChild(input_note_date);
	div_note_edit.appendChild(textarea);
//	div_note_edit.appendChild(button_save);
	
	clearField();
	
	div_conteiner.appendChild(div_status);
	div_conteiner.appendChild(hr);
	div_conteiner.appendChild(div_note_edit);
	note_container.appendChild(div_conteiner);
	
};

function createNewNote(){	//фцнкция создания поля для заметки
//	if (!marker){
		createNote();
//		marker= true;
//	}
};

function edit(){ 			//функция редактирования заметки
	clickEdit(event);
};

function view(){ 			//функция чтения заметки
	clickView(event);
};

function save(){
	clickSave(event);
};

function clearNotes(){
	let element= document.getElementById('notes_container');
	while (element.firstChild) {
		element.removeChild(element.firstChild);
	}
};

function create(){
	clickCreate();
}

function clearField(){
		let note= document.getElementById("note");
	if (note){
		note.remove();
	};
}

function noteDelete(){
	clickDelete(event);
}
