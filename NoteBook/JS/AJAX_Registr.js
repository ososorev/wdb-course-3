function send(event)
{
event.preventDefault();
fetch("./PHP/Registr.php", {method: "POST", body: new FormData(document.forms[0])})
	.then(response => response.text())
	.then(text => {
		let tx;
		tx=text;
		if (tx=="1")
			alert('Не все данные');
			if (tx=="2")
				alert('Пароли не совпадают');
				if (tx=="3")
					alert('Такой пользователь c таки @mail зарегистрирован');
					if (tx=="")
						window.location.href="Login.html";
	});
}	