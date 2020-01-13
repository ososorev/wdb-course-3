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
	
	forms.formElement("right", "content2", form2,"form1");
	forms.divElement(json['date'],"Note_name","Note_name",form1);
	forms.divElement(json['note'],"Note_text","Note_text",form1);
	
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
	document.getElementById('id_notes').value=note_name;
	document.getElementById('id_notes').id =note_id;
}	


function Add_Note(event)//форма для ввода новой записи
{
	
	event.preventDefault();
	document.querySelector('#form1').remove();

	forms.formElement("right", "content2", form2,"form1");
		forms.divElement('Edit note',"Edit_mode","Edit_mode",form1);
		forms.inputElement("Name","name","input","Note_name","Note_name",'name',form1);
		forms.inputElement("date","date","date","form-control","form-control",'date',form1);
		forms.TextElement("Line 1","note",'',"Note_text","Note_text",'note',form1);
		forms.buttonElement("Button","Save",Write_note,"register1","register1",form1,'note_id');
		
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
			alert('Удаление завершенно');
		});
document.getElementById(note_id).remove();
document.getElementById("date").value='';
document.getElementById('name').value='';
document.getElementById('note').value='';
}
