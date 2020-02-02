function load_note(note)//загрузка записей пользователя при загрузке страницы
{
	
				forms.buttonElement("Submit",'',Read_note,notes,'btn');
				btn.classList.add("col-sm-12");
				btn.classList.add("col-lg-11");
				
				forms.p(note['name'],'leftstr',btn);

				forms.p(note['date'],'rightstr',btn);
			
				forms.buttonElement('','',Delete_note,btn,'cross');
				cross.classList.add("float-right");

				forms.buttonElement('','',Edit_note,btn,'paper');
				paper.classList.add("float-right");

				forms.img("CSS/cross.png", 'record1','',cross);
				forms.img("CSS/paper.png", 'record1','',paper);
				document.getElementById('btn').id = note['id'];
				document.getElementById('cross').removeAttribute("type");
				document.getElementById('paper').removeAttribute("type");
				document.getElementById('cross').removeAttribute("id");
				document.getElementById('paper').removeAttribute("id");
	}
