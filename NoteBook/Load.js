function ready()//загрузка записей пользователя при загрузке страницы
{
	fetch('PHP/Start.php') 
		.then(response => response.json())
		.then(json => {
			json.forEach(function(item,i,arr)
			{
			let string=JSON.stringify(json[i]);
			let obj=JSON.parse(string);  
			
			let Button_note = document.createElement("Button");
				Button_note.classList.add("col-sm-12");
				Button_note.classList.add("col-lg-9");
				Button_note.classList.add("a2");
				Button_note.id=obj['id'];
				Button_note.innerText=obj['name'];
				Button_note.onclick=Read_note;
				notes.prepend(Button_note);
	
	
			let Button_cross = document.createElement("Button");
				Button_cross.classList.add("float-right");
				Button_note.append(Button_cross);
	
			let Button_paper = document.createElement("Button");
				Button_paper.classList.add("float-right");
				Button_note.append(Button_paper);
				   
			let Img_cross = document.createElement("Img");
				Img_cross.src="CSS/cross.png";
				Img_cross.classList.add("record1");
				Img_cross.id='c'+obj['id'];
				Img_cross.onclick=Delete_note;
				Button_cross.prepend(Img_cross);
				   
			let Img_Paper = document.createElement("Img");
				Img_Paper.src="CSS/paper.png";
				Img_Paper.classList.add("record1");
				Img_Paper.id='p'+obj['id'];
				Img_Paper.onclick=Edit_note;
				Button_paper.prepend(Img_Paper);
			});
		});
	}
