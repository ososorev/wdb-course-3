
function send(event) {
    event.preventDefault();
    fetch("edit.php", {method: "POST", body: new FormData(document.forms[0])})
         .then(response => response.text()).then(outputResult => {
        document.querySelector(".output").innerHTML = outputResult;
    })
}
