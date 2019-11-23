document.addEventListener("DOMContentLoaded", function(){
    document.querySelector(".send_button").addEventListener('click', sendMessage);
});

setInterval(getMessage, 500);

document.addEventListener("DOMContentLoaded", getMessage);


function sendMessage() {
    let username = document.querySelector(".username").value;
    let message = document.querySelector('.send_message').value;
    let arrNote = [];
    if(localStorage['arrNote']!= null)
    {
        arrNote = JSON.parse(localStorage['arrNote']);
    }
    let note = {
        'username': username,
        'message': message
    }
    arrNote.push(note);
    localStorage.setItem('arrNote', JSON.stringify(arrNote));
}

function getMessage() {
    let arrNote = localStorage['arrNote'];
    let username;
    let message;
    let allMess = '';
    if(localStorage['arrNote']!= null)
    {
        arrNote = JSON.parse(arrNote);
        arrNote.forEach(function (noteData) {
            username = noteData['username'];
            message = noteData['message'];
            allMess = allMess + "Имя: " + username + "<br>Сообщение :" + message + "<br>";
        })

        document.querySelector('.message').innerHTML = allMess;
    }



}

