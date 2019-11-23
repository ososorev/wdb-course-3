(function() {
    App.saveNoteAjax =
        function sendLoginFormAjax(event) {
            event.preventDefault();

            fetch("php/createNote.php", {
                method: "POST",
                body: new FormData(document.querySelector('.create_note')),
                credentials: 'include'
            })
                .then(response => response.text())
                .then(response => {
                    alert(response);
                    document.querySelector('.note_work_area').innerHTML = '';
                    App.getNoteListAjax(event);
                });
        }
})();
