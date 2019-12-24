function Read_note(event)
{	
event.preventDefault();
let note_id=event.target.id;
let formData = new FormData();
formData.append('note_id', note_id);
fetch('PHP/Note _Read.php', {method: "POST", body: formData})
	.then(response => response.json())
	.then(json => {
		let note_name=json['name'];
		let note =json['note'];
		document.querySelector('#form1').innerHTML='<div class="Note_name" id="name_note"></div><div class="Note_text" id="note"></div>';
		document.getElementById('name_note').innerHTML =note_name;
		document.getElementById('note').innerHTML =note;
	});
}	


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
	//.then(response => response.text())
	//.then(text => {
		let note_name=json['name'];
		let note =json['note'];
		let date =json['date'].substring(0,10);
		document.querySelector('#form1').innerHTML='<div class="Edit_mode">Edit mode</div><input type="text" class="Note_name" Placeholder="Name" id="name" name="name"></input>	<input type="date" class=" form-control Note" Placeholder="Data" id="date" name="date"></input><textarea type="text" class="Note_text" Placeholder="Line 1" id="note" name="note"></textarea><button class="register1" type="Submit" id="note_id" onclick="Reload_note(event)">Save</button>';
		document.getElementById("date").value= date;
		document.getElementById('name').value= note_name;
		document.getElementById('note').innerHTML=note;
		document.getElementById("note_id").name=note_id;
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
		notes.insertAdjacentHTML('beforeEnd','<button class="col-sm-12 col-lg-9 a2" id="id_notes" onclick="Read_note(event)"></button>');
		document.getElementById('id_notes').innerHTML=note_name;
		id_notes.insertAdjacentHTML('beforeEnd', '<button class="float-right"><img src="CSS/cross.png" id="id_cross" class="record1" onclick="Edit_note(event)"></button>');
		id_notes.insertAdjacentHTML('beforeEnd', '<button class="float-right"><img src="CSS/paper.png" id="id_pape" class="record1" onclick="Edit_note(event)"></button>');
		document.getElementById('id_pape').id = 'p'+id_note;
		document.getElementById('id_cross').id = 'c'+id_note;
		document.getElementById('id_notes').id = id_note;
	});
}	


function Reload_note(event)
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
		document.getElementById(id).innerHTML=name;
	});
}	

function Add_Note(Event){
    event.preventDefault()
    document.querySelector('#form1').innerHTML='<div class="Edit_mode">Edit mode</div><input type="text" class="Note_name" Placeholder="Name" id="name" name="name"></input><input type="date" class=" form-control Note" Placeholder="Data" id="date" name="date"></input><textarea type="text" class="Note_text" Placeholder="Line 1" id="note" name="note"></textarea><button class="register1" type="Submit" onclick="Write_note(event)">Save</button>';
}

