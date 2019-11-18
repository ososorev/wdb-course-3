function generateNoteList(arrDataJson) {

    let table = document.createElement("table");
    table.className = 'table_notes';
    let note;
    let i;
    arrDataJson.forEach(function (note, i, arrDataJson){

        let tr = document.createElement('tr');
        let td_name = document.createElement('td');
        td_name.innerHTML = note['name'];
        td_name.className = 'note_name';
        td_name.onclick = function (){
            seeNote(note);
        };

        let td_date = document.createElement('td');
        td_date.innerHTML = note['date_create'];
        td_date.className = 'note_date';

        let edit = document.createElement('td');
        edit.innerHTML ="&#10000;";
        edit.className = 'marker';

        //edit.onclick = function();
        let del = document.createElement('td');
        del.innerHTML = "&#10006;";
        del.className = 'marker';

        //del.onclick = function();
        tr.append(td_name);
        tr.append(td_date);
        tr.append(edit);
        tr.append(del);
        table.append(tr);

    })
    document.querySelector('.list_notes').append(table);

}

function seeNote(noteData) {
    let seeNote = document.querySelector('.see_note');
    seeNote.innerHTML = '';

    let name = document.createElement('div');
    name.innerText = noteData.name;
    name.className = 'see_name';

    let date = document.createElement('div');
    date.innerHTML = noteData.date_create;
    name.className = 'see_date_create';

    let hr = document.createElement('hr');

    let text = document.createElement('div');
    text.innerHTML = noteData.text;
    text.className = "see_text";


    seeNote.append(name);
    seeNote.append(date);
    seeNote.append(hr);
    seeNote.append(text);

}