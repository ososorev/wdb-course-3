export default function viewNote(event) {
    event.preventDefault();
    let note_id = $(this).parent().attr("class").replace("note_item-","");
    $.ajax({
        url: "view_note",
        data: 'note_id=' + note_id,
        cache: false,
        type: "POST",
        success: function (html) {
            $('.work_area').empty();
            $('.work_area').append(html);
        }
    });
}
