function send(event)
{
event.preventDefault();
fetch("Php/Login.php", {method: "POST", body: new FormData(document.forms[0])})
	.then(response => response.text())
	.then(text => {
		let tx;
		tx=text;
		if (tx==""){
			alert('Неверный логин');
		}
		else{
		window.location.href="NBook.html";
		}
	});
}	