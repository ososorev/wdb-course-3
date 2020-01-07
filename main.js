function addNewNoteLine() {
	let noteLine = document.getElementById("noteContainer");
	
	var ner = eval('<?php echo $json;?>'); // передать данные не получается
	console.log(ner);
	
	form = new newNoteLine();
	form.noteTitle('ner');
	form.noteDate('editDate');
	form.noteEditor();
	form.noteDelete();
	noteLine.insertAdjacentHTML("beforeend", "<br/>");
}

function newNoteLine() {
	let div = document.createElement("div");
	div.type = "div";
	div.id = "noteLine";
	div.classList = "note w-100";
	this.noteTitle = function (value) {
		let input = document.createElement("input");
		input.type = "button";
		input.id = "noteTitle";
		input.classList = "buttonNote";
		input.onclick = function (){
			send(event);
		};
		input.value = value;
		div.append(input);
	};
	this.noteDate = function (value) {
		let input = document.createElement("input");
		input.type = "submit";
		input.id = "noteDate";
		input.classList = "buttonNote";
		input.onclick = function (){
			send(event);
		};
		input.value = value;
		div.append(input);
	};
	this.noteEditor = function () {
		let input = document.createElement("input");
		input.type = "submit";
		input.id = "noteEditor";
		input.classList = "buttonNote";
		input.value = "\u270E";
		input.onclick = function (){
			send(event);
		};
		div.append(input);
	};	
	this.noteDelete = function () {
		let input = document.createElement("input");
		input.type = "button";
		input.id = "noteDelete";
		input.classList = "buttonNote";
		input.value = "\u2716";
		input.onclick = function (){
			send(event);
		};
		div.append(input);
	};
	noteContainer.appendChild(div);
}