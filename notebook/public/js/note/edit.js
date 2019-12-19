function editNote(event) {
    event.preventDefault();
    let note_id = $(this).parent().attr("class").replace("note_item-","");
    $.ajax({
        url: "edit_note_data",
        data: 'note_id=' + note_id,
        cache: false,
        type: "POST",
        success: function (html) {
            $('.work_area').empty();
            $('.work_area').append(html);
        }
    });
}