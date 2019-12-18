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
        .then(response => response.text())
        .then(outputResult => {document.querySelector(".noteItemBlock").innerHTML = outputResult;})
}

function sendChanges(event) {
    event.preventDefault();
    fetch("main.php", {method: "POST", body: new FormData(document.forms[1])})
        .then(response => response.text())
        .then(outputResult => {document.querySelector(".noteItemBlock").innerHTML = outputResult;})
}

// function closeAndRemove(){
//     send();
//     let edit = document.querySelector(".rightContainerEdit");
//     edit.classList.remove("visible");
//
// }

function splitNote(arr) {
    const name = arr[0]["note_name"];
    const date = arr[0]["use_date"];
    const content = arr[0]["content"];
    document.querySelector(".editName").value = name;
    document.querySelector(".editDate").value = date;
    document.querySelector(".editContent").innerHTML = content;
}

function getNoteInfo(event, id) {
    event.preventDefault();
    let data = new FormData();
    data.append("note_id", id);
    fetch("getNoteData.php", {method: "POST", body: data})
        .then(response => response.json())
        .then(noteInfo  => {
            JSON.parse(JSON.stringify(noteInfo));
            splitNote(noteInfo)})
}

function showNote(event, id) {
    let edit = document.querySelector(".rightContainerEdit");
    getNoteInfo(event, id);
    edit.classList.remove("hidden");
    edit.classList.add("visible");
}

function deleteNote(event, id) {
    event.preventDefault();
    const confirmationOfDeletion = confirm("Are you sure want to delete?");
    if(confirmationOfDeletion) {
        //УДАЛЯТЬ ЗДЕСЬ
        // fetch("main.php", {method: "POST", body: new FormData(document.querySelector(".noteItemBloc"))})
    }
    // alert(confirmationOfDeletion);
    // удаление из базы и закрытие
}

function onClose() {
    let edit = document.querySelector(".rightContainerEdit");
    edit.classList.remove("visible");
    edit.classList.add("hidden");
}
