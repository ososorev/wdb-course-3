function addNewNote() {
    let edit = document.querySelector(".rightContainerEdit");
    edit.classList.remove("hidden");
    edit.classList.add("visible");
}

// button.addEventListener('click', function(event) {
//     event.preventDefault();
//     button.classList.add('hidden');
//     films_block.classList.add('visible');
// });

function send(event) {
    event.preventDefault();
    fetch("main.php", {method: "POST", body: new FormData(document.forms[0])})
        .then(response => response.text()).then(outputResult => {
        document.querySelector(".noteItemBlock").innerHTML = outputResult;
    })
}

function closeAndRemove(){
    send();
    let edit = document.querySelector(".rightContainerEdit");
    edit.classList.remove("visible");

}

function showNote() {
    let edit = document.querySelector(".rightContainerInfo");
    edit.classList.remove("hidden");
    edit.classList.add("visible");
}
