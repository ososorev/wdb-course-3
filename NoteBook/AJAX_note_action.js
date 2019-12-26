	


function Edit_note(event)
{	
event.preventDefault();
let id=event.target.id;
let note_id= id.substring(1);
let formData = new FormData();
formData.append('note_id', note_id);
fetch('PHP/Note _Read.php', {method: "POST", body: formData})
	.then(response => response.json())
	.then(json => {
		let note_name=json['name'];
		let note =json['note'];
		let date =json['date'].substring(0,10);

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
		Name_note.name="Name";
		Name_note.type='text';
		Name_note.value=json['name'];
		Name_note.id='name';
		Edit_Note.after(Name_note);


		let Date_note = document.createElement("input");
		Date_note.classList.add("form-control");
		Date_note.classList.add("Note");
		Date_note.name="date";
		Date_note.type='date';
		Date_note.value=json['date'].substring(0,10);
		Date_note.id='date';
		Name_note.after(Date_note);

		let Note = document.createElement("textarea");
		Note.classList.add("Note_text");
		Note.name="note";
		Note.type='text';
		Note.innerText=json['note'];
		Note.id='note';
		Date_note.after(Note);

	
		let Button_save = document.createElement("Button");
		Button_save.classList.add("register1");
		//Button_save.type='Submit';
		Button_save.innerText="Save";
		Button_save.name=note_id;
		Button_save.id="note_id";
		Button_save.onclick=Reload_note;
		Note.after(Button_save);
	});
	
}

function Read_note(event)
{	
event.preventDefault();
let note_id=event.target.id;
let formData2 = new FormData();
formData2.append('note_id', note_id);
fetch('PHP/Note _Read.php', {method: "POST", body: formData2})
	.then(response => response.json())
	.then(json => {
		let note_name=json['name'];
		let note =json['note'];

	document.querySelector('#form1').remove();
	
	let form1 = document.createElement("form");
		form1.classList.add("right");
		form1.classList.add("content2");
		form1.id='form1';
		form2.after(form1);	

		let Read_Name_note = document.createElement("div");
		Read_Name_note.classList.add("Note_name");
		Read_Name_note.innerText=json['name'];
		form1.prepend(Read_Name_note);

		let Read_note = document.createElement("div");
		Read_note.classList.add("Note_text");
		Read_note.innerText=json['note'];
		Read_Name_note.after(Read_note);
	});
}


function Write_note(event)
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
		let id_note=json['id'];
		let note_name=json['name'];
		let Button_note = document.createElement("Button");
			Button_note.classList.add("col-sm-12");
			Button_note.classList.add("col-lg-9");
			Button_note.classList.add("a2");
			Button_note.id=json['id'];
			Button_note.innerText=json['name'];
			Button_note.onclick=Read_note;
			notes.prepend(Button_note);


		let Button_cross = document.createElement("Button");
			Button_note.prepend(Button_cross);

		let Button_paper = document.createElement("Button");
			Button_note.prepend(Button_paper);
			   
		let Img_cross = document.createElement("Img");
			Img_cross.src="CSS/cross.png";
            Img_cross.classList.add("record1");
			Img_cross.classList.add("float-right");
			Img_cross.id='c'+json['id'];
			Img_cross.onclick=Delete_note;
			Button_cross.prepend(Img_cross);
			   
		let Img_Paper = document.createElement("Img");
			Img_Paper.src="CSS/paper.png";
            Img_Paper.classList.add("record1");
			Img_Paper.classList.add("float-right");
			Img_Paper.id='p'+json['id'];
			Img_Paper.onclick=Edit_note;
			Button_paper.prepend(Img_Paper);
	});
}	


function Reload_note()
{	
event.preventDefault();
let date=document.getElementById("date").value;
let note_name=document.getElementById('name').value;
let note=document.getElementById('note').value;
let note_id=event.target.name;
//let note_id= id.substring(1);
let formData = new FormData();
formData.append('note_name', note_name);	
formData.append('note', note);
formData.append('date', date);		
formData.append('note_id', note_id);
fetch('PHP/rewrite.php', {method: "POST", body: formData})
	.then(response => response.json())
	.then(json => {
		let name=json['name'];
		let id =json['id'];
	});
document.getElementById(note_id).id='id_notes';
document.getElementById('id_notes').innerHTML=note_name;
id_notes.insertAdjacentHTML('beforeEnd', '<button class="float-right"><img src="CSS/cross.png" id="id_cross" class="record1" onclick="Delete_note(event)"></button>');
id_notes.insertAdjacentHTML('beforeEnd', '<button class="float-right"><img src="CSS/paper.png" id="id_pape" class="record1" onclick="Edit_note(event)"></button>');
document.getElementById('id_pape').id = 'p'+note_id;
document.getElementById('id_cross').id = 'c'+note_id;
document.getElementById('id_notes').id =note_id;
}	


function Add_Note(event){
	//document.getElementById(form1).remove();
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
		Name_note.name="Name";
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


function Delete_note(event)
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
	//document.getElementById("date").value='';
	//document.getElementById('name').value='';
	//document.getElementById('note').value='';
}