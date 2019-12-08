function editNote(event) {
    $.ajax({
        url: "edit_note", // url запроса
        cache: false,
        type: "POST", // устанавливаем типа запроса POST
        success: function (html) {
            $('.work_area').empty();
            $('.work_area').append(html);
        }
    });
}