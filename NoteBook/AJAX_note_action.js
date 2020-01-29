function Read_note(event)//чтение записи
{	
event.preventDefault();
let note_id=event.target.closest("button[id]").id;
let formData2 = new FormData();
formData2.append('note_id', note_id);
fetch('PHP/Note _Read.php', {method: "POST", body: formData2})
	.then(response => response.json())
	.then(json => {

	document.querySelector('#form1').remove();
	
	forms.formElement("right", "content2", form2,"form1");
	forms.divElement('',"Note_name","text_btn",form1,'name_data');
	forms.p(json['name'],'leftstr',name_data);
	forms.p(json['date'],'rightstr',name_data);
	forms.divElement(json['note'],"Note_text","Note_text",form1);
	
	});
}


function Edit_note(event)//форма при нажатии на кнопку редактирования 
{	
event.preventDefault();
let note_id=event.target.closest("button[id]").id;
event.cancelBubble=true;
let formData = new FormData();
formData.append('note_id', note_id);
fetch('PHP/Note _Read.php', {method: "POST", body: formData})
	.then(response => response.json())
	.then(json => {

		document.querySelector('#form1').remove();


		forms.formElement("right", "content2", form2,"form1");
			forms.divElement('Edit note',"Edit_mode","Edit_mode",form1);
			
			forms.inputElement("Name","name","input","Note_name","z",'name',form1);
				document.getElementById('name').value=json['name'];
			
			forms.inputElement("date","date","date","form-control","z",'date',form1);
				document.getElementById('date').value=json['date'];

			forms.TextElement("Line 1","note",json['note'],"Note_text","z",'note',form1);
	
			forms.buttonElement("Button","Save",Reload_note,form1,'id_note');
			id_note.classList.add("register1");
				//document.getElementById('note_id').name = note_id;
			document.getElementById('id_note').id = json['id'];			
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

		forms.buttonElement("Submit",'',Read_note,notes,'btn');
		btn.classList.add("col-sm-12");
		btn.classList.add("col-lg-11");
		
		forms.p(json['name'],'leftstr',btn);
		forms.p(json['date'],'rightstr',btn);
		
		forms.buttonElement('','',Delete_note,btn,'cross');
		cross.classList.add("float-right");

		forms.buttonElement('','',Edit_note,btn,'paper');
		paper.classList.add("float-right");


		forms.img("CSS/cross.png", 'record1','',cross);
		forms.img("CSS/paper.png", 'record1','',paper);
		document.getElementById('btn').id = json['id'];
		document.getElementById('cross').removeAttribute("type");
		document.getElementById('paper').removeAttribute("type");
		document.getElementById('cross').removeAttribute("id");
		document.getElementById('paper').removeAttribute("id");

	});
}	


function Reload_note()//вставка записи после редактирования в кнопку
{	
event.preventDefault();
let date=document.getElementById("date").value;
let note_name=document.getElementById('name').value;
let note=document.getElementById('note').value;
//let note_id=event.target.name;
let note_id=event.target.id;
let formData = new FormData();
formData.append('note_name', note_name);	
formData.append('note', note);
formData.append('date', date);		
formData.append('note_id', note_id);
fetch('PHP/rewrite.php', {method: "POST", body: formData})
	.then(response => response.json())
	.then(json => {
		document.getElementById(json['id']).id='id_notes';
		document.getElementById('id_notes').innerHTML='<p class="leftstr">'+json['name']+'</p><p class="rightstr">'+json['date']+'</p>';
		id_notes.insertAdjacentHTML('beforeEnd', '<button class="float-right"><img src="CSS/cross.png" id="id_cross" class="record1" onclick="Delete_note(event)"></button>');
		id_notes.insertAdjacentHTML('beforeEnd', '<button class="float-right"><img src="CSS/paper.png" id="id_pape" class="record1" onclick="Edit_note(event)"></button>');
		document.getElementById('id_notes').id =json['id'];
	});

}	


function Add_Note(event)//форма для ввода новой записи
{
	
	event.preventDefault();
	document.querySelector('#form1').remove();

	forms.formElement("right", "content2", form2,"form1");
		forms.divElement('Edit note',"Edit_mode","Edit_mode",form1);
		forms.inputElement("Name","name","input","Note_name","z",'name',form1);
		forms.inputElement("date","date","date","form-control","z",'date',form1);
		forms.TextElement("Line 1","note",'',"Note_text","z",'note',form1);
		forms.buttonElement("Button","Save",Write_note,form1,'note_id');
		note_id.classList.add("register1");
}


function Delete_note(event)//удаление записи
{	
event.preventDefault();
let note_id=event.target.closest("button[id]").id;
event.cancelBubble=true;
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



function Search(event)//Поиск
{
event.preventDefault();
let notes=document.querySelectorAll("p.leftstr");//поиск по тегу <p>, классу leftstr
if (document.querySelector(".search").value==''){
	for (let elem of notes) {
		let id_note=elem.parentElement.id;
			document.getElementById(id_note).remove();
	}
	load();
}
else
for (let elem of notes) {
	let id_note=elem.parentElement.id;
	if (document.querySelector(".search").value!==elem.innerHTML)
		document.getElementById(id_note).remove();	
  }
}


