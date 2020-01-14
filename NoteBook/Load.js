function load()//загрузка записей пользователя при загрузке страницы
{
	fetch('PHP/Start.php') 
		.then(response => response.json())
		.then(json => {
			if (json=='')
				window.location.href="Login.html";
			else	
			json.forEach(function(item,i,arr)
			{
			let string=JSON.stringify(json[i]);
			let obj=JSON.parse(string);  		
				forms.buttonElement("Submit",'',Read_note,"col-sm-12","col-lg-11",notes,'btn');
				
				forms.p(obj['name'],'leftstr',btn);

				forms.p(obj['date'],'rightstr',btn);
			
				forms.buttonElement('','','',"float-right","float-right",btn,'cross');
				forms.buttonElement('','','',"float-right","float-right",btn,'paper');
				forms.img("CSS/cross.png", 'record1', 'c'+obj['id'], Delete_note,cross);
				forms.img("CSS/paper.png", 'record1', 'c'+obj['id'], Edit_note,paper);
				document.getElementById('btn').id = obj['id'];
				document.getElementById('cross').id = 'c'+obj['id'];
				document.getElementById('paper').id = 'p'+obj['id'];
			});
		});
	}
