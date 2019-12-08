function deleteNote(event) {
    event.preventDefault();
    let note_id = $(this).parent().attr("class").replace("note_item-","");
    $('.delete_modal').modal();
    $('.btn_delete').on('click', function () {
       $.ajax({
           url: "delete_note", // url запроса
           data: 'note_id='+note_id,
           cache: false,
            type: "POST", // устанавливаем типа запроса POST
            success: function (html) {
               resetListNotes();
               $('.work_area').empty();
               $('.work_area').append(html);
         }
     })
     })
}
