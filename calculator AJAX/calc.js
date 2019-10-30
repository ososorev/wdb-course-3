function send() {
    event.preventDefault();
    let result = fetch("calculation.php", {method: "POST", body:new FormData(document.forms[0])})
        .then(response=>response.text())
        .then(text=>{
            document.querySelector(".input_result").value=text;
    })

}