function send(event){
			event.preventDefault();
			fetch("index.php",{method:"POST", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("head").innerHTML=text;});
		}