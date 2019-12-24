let idUpdate;

function addNewNote() {
    let create = document.querySelector(".rightContainerCreate");
    create.classList.add("visible");
}

function send(event) {
    event.preventDefault();
    fetch("insertNoteData.php", {method: "POST", body: new FormData(document.forms[0])})
        .then(response => response.text())
        .then(errorResult => {document.querySelector(".output").innerHTML = errorResult;})
        .then(location.reload(true))
}

function sendChanges(event) {
    event.preventDefault();
    let data = new FormData(document.forms[1]);
    data.append("note_id", idUpdate);
    fetch("updateNoteData.php", {method: "POST", body: data})
        .then(response => response.text())
        .then(errorResult => {document.querySelector(".output").innerHTML = errorResult;})
        .then(location.reload(true))
}

function splitNote(arr) {
    idUpdate = arr["id_note"];
    const name = arr["note_name"]; // или так arr.note_name;
    const date = arr["use_date"]; // или так arr.use_date;
    const content = arr["content"]; // или так arr.content;
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
    edit.classList.add("visible");
}

function deleteNote(event, id) {
    event.preventDefault();
    const confirmationOfDeletion = confirm("Are you sure want to delete?");
    if(confirmationOfDeletion) {
        let data = new FormData();
        data.append("note_id", id);
        fetch("deleteNoteData.php", {method: "POST", body: data})
            .then(location.reload(true))
    }
}

function onClose() {
    let edit = document.querySelector(".rightContainerEdit");
    edit.classList.remove("visible");
}

function searchNote() {
    let inputValue = document.querySelector(".inputSearchBlock").value;
    const nameArr = document.querySelectorAll(".noteItemBlock");
    nameArr.forEach(note => {
        let noteName = note.querySelector(".noteItemName").innerText;
        if (noteName.includes(inputValue)) {
            note.classList.add("visible");
        } else {
            note.classList.remove("visible");
        }
    })
}
