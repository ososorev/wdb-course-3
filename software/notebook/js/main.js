function addNewNote() {
    let create = document.querySelector(".rightContainerCreate");
    create.classList.remove("hidden");
    create.classList.add("visible");
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

// not done
function getNoteInfo(event, id_note) {
    event.preventDefault();
    // fetch("main.php", {method: "POST", body: new FormData(document.forms[0])})
    //     .then(response => response.text()).then(outputResult => {
    //     document.querySelector(".noteItemBlock").innerHTML = outputResult;
    // })
}

function showNote(id_note) {
    let edit = document.querySelector(".rightContainerEdit");
    // getNoteInfo(id_note);
    edit.classList.remove("hidden");
    edit.classList.add("visible");
}

function deleteNote(id_note) {
    //
}

function onClose() {
    let edit = document.querySelector(".rightContainerEdit");
    edit.classList.remove("visible");
    edit.classList.add("hidden");
}
