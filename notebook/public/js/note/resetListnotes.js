function resetListNotes() {
    $.ajax({
        url: "notes", // url запроса
        cache: false,
        type: "POST", // устанавливаем типа запроса POST
        success: function (html) {
            $('body').append(html);
        }
    });

}