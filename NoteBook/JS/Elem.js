function Add_Note(Event){
    event.preventDefault()
    document.querySelector('#form1').innerHTML='<div class="Edit_mode">Edit mode</div><input type="text" class="Note_name" Placeholder="Name" id="name" name="name"></input><input type="date" class=" form-control Note" Placeholder="Data" id="date" name="date"></input><textarea type="text" class="Note_text" Placeholder="Line 1" id="note" name="note"></textarea><button class="register1" type="Submit" onclick="Write_note(event)">Save</button>';
}