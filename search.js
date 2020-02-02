let lastResFind=""; // последний удачный результат
let copy_page=""; // копия страницы в ихсодном виде
function TrimStr(s) {
     s = s.replace( /^\s+/g, '');
  return s.replace( /\s+$/g, '');
}
function FindOnPage(searchBox) {//ищет текст на странице, в параметр передается ID поля для ввода
let obj = window.document.getElementById("searchBox");
	
let textToFind;
	if (obj) {
		textToFind = TrimStr(obj.value);//обрезаем пробелы
	} 
	else {
		alert("Not found");
		return;
	}
	if (textToFind == "null") {
		alert("Not found");
		return;
	}
	if(document.body.innerHTML.indexOf(textToFind)=="-1")
		alert(obj);
	if(copy_page.length>0)
		document.body.innerHTML=copy_page;
	else copy_page=document.body.innerHTML;

	document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");//стираем предыдущие якори для скрола
	document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" style='background-color:green'>"+textToFind+"</a>"); //Заменяем найденный текст ссылками с якорем;
	lastResFind=textToFind; // сохраняем фразу для поиска, чтобы в дальнейшем по ней стереть все ссылки
	window.location = '#'+textToFind;//перемещаем скрол к последнему найденному совпадению
}