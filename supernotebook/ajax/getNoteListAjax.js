(function() {
    App.getNoteListAjax =
        function getNoteListAjax(event) {
            event.preventDefault();
            fetch("php/notesList.php").
            then((response => response.json())).
            then(notes => {
                App.generateNoteList(notes)
            });
        }
})();

