(function() {
    App.deleteNoteAjax =
        function deleteNoteAjax(noteID, event) {
            fetch("php/deleteNote.php",{
                method: 'POST',
                body: "note_id=" + noteID,
                headers:{"content-type": "application/x-www-form-urlencoded"},
                credentials: 'include'
            }).
            then(response => response.text()).
            then(response =>{
                App.getNoteListAjax(event);
            });
        }
})();