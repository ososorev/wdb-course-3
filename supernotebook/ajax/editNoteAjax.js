(function() {
    App.editNoteAjax =
        function editNoteAjax(noteId, event) {
            event.preventDefault();
            dataToSend = new FormData(document.querySelector('.edit_note'));
            dataToSend.append("note_id", noteId);

            fetch("php/editNote.php", {
                method: "POST",
                body: dataToSend,
                credentials: 'include'
            })
                .then(response => response.text())
                .then(response => {
                    document.querySelector('.note_work_area').innerHTML = '';
                    App.getNoteListAjax(event);
                });
        }
})();