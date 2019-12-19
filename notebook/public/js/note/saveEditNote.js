function saveEditNote(event) {
    event.preventDefault();
    //let form = new FormData(document.querySelector('.edit_note_form'));
    let form = $('.edit_note_form').serialize();
    $.ajax({
        url: "save_edit_note",
        cache: false,
        type: "POST",
        data: form,
        success: function (html) {
            $('.work_area').empty();
            $('.work_area').append(html);
            //$('.success_save_note').modal();
            resetListNotes();
        }
    });
}