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

function sendChanges(event) {
    event.preventDefault();
    fetch("main.php", {method: "POST", body: new FormData(document.forms[1])})
        .then(response => response.text()).then(outputResult => {
        document.querySelector(".noteItemBlock").innerHTML = outputResult;
    })
}

// function closeAndRemove(){
//     send();
//     let edit = document.querySelector(".rightContainerEdit");
//     edit.classList.remove("visible");
//
// }

function splitNote(arr) {
    document.querySelector(".editName").innerHTML = arr[note_name];
    document.querySelector(".editDate").innerHTML = arr[uee_date];
    document.querySelector(".editContent").innerHTML = arr[content];
}

function getNoteInfo(event, id) {
    event.preventDefault();
    fetch("getNoteData.php", {method: "POST", data: {note_id: id}})
        .then(response => response.text())
        .then(noteInfo  => {splitNote(noteInfo)})
}

function showNote(event, id) {
    let edit = document.querySelector(".rightContainerEdit");
    getNoteInfo(event, id);
    edit.classList.remove("hidden");
    edit.classList.add("visible");
}

function deleteNote(event, $id) {
    event.preventDefault();
    // fetch("main.php", {method: "POST", body: new FormData(document.forms[0])})
}

function onClose() {
    let edit = document.querySelector(".rightContainerEdit");
    edit.classList.remove("visible");
    edit.classList.add("hidden");
}
