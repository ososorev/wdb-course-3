function createNote(event) {
    event.preventDefault();
    $.ajax({
        url: "create_note",
        cache: false,
        type: "POST",
        success: function (html) {
            $('.work_area').empty();
            $('.work_area').append(html);
        }

    });
}