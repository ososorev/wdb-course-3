	function Edit_note(event)//форма при нажатии на кнопку редактирования 
{	
event.preventDefault();
let id=event.target.id;
let note_id= id.substring(1);
let formData = new FormData();
formData.append('note_id', note_id);
fetch('PHP/Note _Read.php', {method: "POST", body: formData})
	.then(response => response.json())
	.then(json => {

		document.querySelector('#form1').remove();


		forms.formElement("right", "content2", form2,"form1");
			forms.divElement('Edit note',"Edit_mode","Edit_mode",form1);
			forms.inputElement("Name","name","input","Note_name","Note_name",'name',form1);
				document.getElementById('name').value=json['name'];
			forms.inputElement("date","date","date","form-control","form-control",'date',form1);
				document.getElementById('date').value=json['date'];

			forms.TextElement("Line 1","note",json['note'],"Note_text","Note_text",'note',form1);
	
			forms.buttonElement("Button","Save",Reload_note,"register1","register1",form1,'note_id');
				document.getElementById('note_id').name = note_id;
	
	});
	
}

function Read_note(event)//чтение записи
{	
event.preventDefault();
let note_id=event.target.id;
let formData2 = new FormData();
formData2.append('note_id', note_id);
fetch('PHP/Note _Read.php', {method: "POST", body: formData2})
	.then(response => response.json())
	.then(json => {

	document.querySelector('#form1').remove();
	
	let form1 = document.createElement("form");
		form1.classList.add("right");
		form1.classList.add("content2");
		form1.id='form1';
		form2.after(form1);	

		let Read_Name_note = document.createElement("div");
		Read_Name_note.classList.add("Note_name");
		Read_Name_note.innerText=json['date'];
		form1.prepend(Read_Name_note);

		let Read_note = document.createElement("div");
		Read_note.classList.add("Note_text");
		Read_note.innerText=json['note'];
		Read_Name_note.after(Read_note);
	});
}


function Write_note(event)//вставка кнопки с названием записи после ввода записи
{
event.preventDefault();
let name = document.getElementById('name').value;
if (name=='')
{
	return alert('Имя записи не введено');
}
fetch('PHP/Note.php', {method: "POST", body: new FormData(form1)})
	.then(response => response.json())
	.then(json => {

		forms.buttonElement("Submit",json['name'],Read_note,"col-sm-12","col-lg-11",notes,'btn');
		forms.buttonElement('','','',"float-right","float-right",btn,'cross');
		forms.buttonElement('','','',"float-right","float-right",btn,'paper');
		forms.img("CSS/cross.png", 'record1', 'c'+json['id'], Delete_note,cross);
		forms.img("CSS/paper.png", 'record1', 'c'+json['id'], Edit_note,paper);
			document.getElementById('btn').id = json['id'];
			document.getElementById('cross').id = 'c'+json['id'];
			document.getElementById('paper').id = 'p'+json['id'];

	});
}	


function Reload_note()//вставка записи после редактирования в кнопку
{	
event.preventDefault();
let date=document.getElementById("date").value;
let note_name=document.getElementById('name').value;
let note=document.getElementById('note').value;
let note_id=event.target.name;
let formData = new FormData();
formData.append('note_name', note_name);	
formData.append('note', note);
formData.append('date', date);		
formData.append('note_id', note_id);
fetch('PHP/rewrite.php', {method: "POST", body: formData})
	.then(response => response.json())
	.then(json => {
	});
	document.getElementById(note_id).id='id_notes';
	document.getElementById('id_notes').innerHTML=note_name;
	id_notes.insertAdjacentHTML('beforeEnd', '<button class="float-right"><img src="CSS/cross.png" id="id_cross" class="record1" onclick="Delete_note(event)"></button>');
	id_notes.insertAdjacentHTML('beforeEnd', '<button class="float-right"><img src="CSS/paper.png" id="id_pape" class="record1" onclick="Edit_note(event)"></button>');
	document.getElementById('id_pape').id = 'p'+note_id;
	document.getElementById('id_cross').id = 'c'+note_id;
	document.getElementById('id_notes').id =note_id;
}	


function Add_Note(event)//форма для ввода новой записи
{
	
	event.preventDefault();
	document.querySelector('#form1').remove();
	
	let form1 = document.createElement("form");
		form1.classList.add("right");
		form1.classList.add("content2");
		form1.id='form1';
		form2.after(form1);

		let Edit_Note = document.createElement("div");
		Edit_Note.classList.add("Edit_mode");
		Edit_Note.innerText="Edit_mode";
		form1.prepend(Edit_Note);	

		let Name_note = document.createElement("input");
		Name_note.classList.add("Note_name");
		Name_note.Placeholder="Name";
		Name_note.name="name";
		Name_note.type='text';
		Name_note.id='name';
		Edit_Note.after(Name_note);


		let Date_note = document.createElement("input");
		Date_note.classList.add("form-control");
		Date_note.classList.add("Note");
		Date_note.Placeholder="Date";
		Date_note.name="date";
		Date_note.type='date';
		Date_note.id='date';
		Name_note.after(Date_note);

		let Note = document.createElement("textarea");
		Note.classList.add("Note_text");
		Note.Placeholder="Line1";
		Note.name="note";
		Note.type='text';
		Note.id='note';
		Date_note.after(Note);

		let Button_save = document.createElement("Button");
		Button_save.classList.add("register1");
		Button_save.type='Submit';
		Button_save.innerText="Save";
		Button_save.onclick=Write_note;
		Note.after(Button_save);

}


function Delete_note(event)//удаление записи
{	
event.preventDefault();
let id=event.target.id;
let note_id= id.substring(1);
let formData1 = new FormData();
formData1.append('note_id', note_id);
fetch('PHP/Note_delete.php', {method: "POST", body: formData1})
	.then(response => response.text())
	.then(text =>{
		if(text==1)
			alert('Удаление завершенно');});
	document.getElementById(note_id).remove();
	document.getElementById("date").value='';
	document.getElementById('name').value='';
	document.getElementById('note').value='';
}
