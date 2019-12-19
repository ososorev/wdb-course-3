function deleteNote(event) {
    //event.preventDefault();
    let note_id = $(this).parent().attr("class");
    note_id = note_id.replace("note_item-","");
    $('.delete_modal').modal();
    $('.btn_delete').on('click', function () {
       $.ajax({
           url: "delete_note",
           data: 'note_id='+note_id,
           cache: false,
            type: "POST",
            success: function (html) {
               resetListNotes();
               $('.work_area').append(html);
         }
     })
     })
}
