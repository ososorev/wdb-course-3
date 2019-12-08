function viewNote(event) {
    let note_id = $(this).parent().attr("class").replace("note_item-","");

    $.ajax({
        url: "view_note", // url запроса
        data: 'note_id=' + note_id,
        cache: false,
        type: "POST", // устанавливаем типа запроса POST
        success: function (html) {
            $('.work_area').empty();
            $('.work_area').append(html);
        }
    });
}
