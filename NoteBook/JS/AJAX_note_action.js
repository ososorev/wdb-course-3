function Read_note(event)//чтение записи
{	
event.preventDefault();
let note_id=event.target.closest("button[id]").id;
let formData2 = new FormData();
formData2.append('note_id', note_id);
fetch('./PHP/Note _Read.php', {method: "POST", body: formData2})
	.then(response => response.json())
	.then(json => {
	document.querySelector('#form1').remove();
	forms.formElement("right", "content2", form2,"form1");
	forms.divElement('',"name","text_btn",form1,'name_data');
	forms.p(json['name'],'leftstr',name_data);
	forms.p(json['date'],'rightstr',name_data);
	forms.divElement(json['note'],"text","text",form1);
	});
}

function Edit_note(event)//форма при нажатии на кнопку редактирования 
{	
event.preventDefault();
let note_id=event.target.closest("button[id]").id;
event.cancelBubble=true;
let formData = new FormData();
formData.append('note_id', note_id);
fetch('./PHP/Note _Read.php', {method: "POST", body: formData})
	.then(response => response.json())
	.then(json => {
		document.querySelector('#form1').remove();
		Edit(Reload_note,json)
			document.querySelector('.name').value=json['name'];
			document.querySelector('.form-control').value=json['date'];
			document.querySelector('.text').value=json['note']
			document.querySelector('.register1').id = json['id'];	
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
fetch('./PHP/Note.php', {method: "POST", body: new FormData(form1)})
	.then(response => response.json())
	.then(json => {
		load_note(json);
	});
}	


function Reload_note()//вставка записи после редактирования в кнопку
{	
event.preventDefault();
let date=document.getElementById("date").value;
let name=document.getElementById('name').value;
let note=document.getElementById('note').value;
let note_id=event.target.id;
let formData = new FormData();
formData.append('name', name);	
formData.append('note', note);
formData.append('date', date);		
formData.append('note_id', note_id);
fetch('./PHP/rewrite.php', {method: "POST", body: formData});
	let notes=document.querySelectorAll("p.leftstr");//поиск по тегу <p>, классу leftstr
		for (let elem of notes) {
			let id_note=elem.parentElement.id;
				document.getElementById(id_note).remove();
		}
		load();
}


function Add_Note(event)//форма для ввода новой записи
{
	event.preventDefault();
	document.querySelector('#form1').remove();
	Edit(Write_note,'')
}


function Delete_note(event)//удаление записи
{	
event.preventDefault();
let note_id=event.target.closest("button[id]").id;
event.cancelBubble=true;
let formData1 = new FormData();
formData1.append('note_id', note_id);
fetch('./PHP/Note_delete.php', {method: "POST", body: formData1})
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


