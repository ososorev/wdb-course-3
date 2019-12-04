function addNewNote() {
    let perem = document.querySelector(".rightContainerEdite");
    perem.classList.add("vizibl");
}

function send(event) {
    event.preventDefault();
    fetch("main.php", {method: "POST", body: new FormData(document.forms[0])})
         .then(response => response.text()).then(outputResult => {
        document.querySelector(".output").innerHTML = outputResult;
    })
}

function closeAndRemove(){
    send();
    let perem = document.querySelector(".rightContainerEdite");
    perem.classList.remove("vizibl");

}