function createNote(event) {
    $.ajax({
        url: "create_note", // url запроса
        cache: false,
        type: "POST", // устанавливаем типа запроса POST
        success: function (html) {
            $('.work_area').empty();
            $('.work_area').append(html);
        }
    });
}