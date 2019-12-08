function saveNewNote(event) {
    event.preventDefault();
    let form = $('.create_note').serialize();
    $.ajax({
        url: "save_new_note", // url запроса
        cache: false,
        type: "POST", // устанавливаем типа запроса POST
        data: form,
        success: function (html) {
            $('.work_area').empty();
            $('body').append(html);
            $('.success_save_note').modal();
        }
    });
}