(function() {
    App.editNoteAjax =
        function editNoteAjax(noteId, event) {
            event.preventDefault();
            fetch("php/editNote.php", {
                method: "POST",
                body: new FormData(document.querySelector('.edit_note')),
                credentials: 'include'
            })
                .then(response => response.text())
                .then(response => {
                    $('.ok_save').modal();
                    document.querySelector('.note_work_area').innerHTML = '';
                    App.getNoteListAjax(event);
                });
        }
})();