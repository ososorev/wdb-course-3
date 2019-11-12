function send(event)
{
event.preventDefault();
fetch("calc.php", {method: "POST", body: new FormData(document.forms[0])})
	.then(response => response.text())
	.then(text => {document.querySelector('#result').innerHTML=text});
}