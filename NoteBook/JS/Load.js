function load()//загрузка записей пользователя при загрузке страницы
{
	fetch('PHP/Start.php') 
		.then(response => response.json())
		.then(json => {
			if (json=='')
				window.location.href="Login.html";
			else	
			json.forEach(function(item,i,arr)
			//load_note(item);
			
			{		
				load_note(item);

				/*forms.buttonElement("Submit",'',Read_note,notes,'btn');
				btn.classList.add("col-sm-12");
				btn.classList.add("col-lg-11");
				
				forms.p(item['name'],'leftstr',btn);

				forms.p(item['date'],'rightstr',btn);
			
				forms.buttonElement('','',Delete_note,btn,'cross');
				cross.classList.add("float-right");

				forms.buttonElement('','',Edit_note,btn,'paper');
				paper.classList.add("float-right");

				forms.img("CSS/cross.png", 'record1','',cross);
				forms.img("CSS/paper.png", 'record1','',paper);
				document.getElementById('btn').id = item['id'];
				document.getElementById('cross').removeAttribute("type");
				document.getElementById('paper').removeAttribute("type");
				document.getElementById('cross').removeAttribute("id");
				document.getElementById('paper').removeAttribute("id");*/
			});
		});
	}
