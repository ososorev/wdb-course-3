(function() {
    App.getNoteListAjax =
        function getNoteListAjax(event) {
            event.preventDefault();
            fetch("php/notesList.php").
            then((response => response.json())).
            then(notes => {
                if(notes)
                {
                    App.generateNoteList(notes);
                }
                else {
                    location.replace("index.php");
                }

            });
        }
})();

