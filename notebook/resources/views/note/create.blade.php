<form method="post" class="col-12 create_note">
    @csrf
    {{ csrf_field() }}
    <div class="title_edit col-12 border-bottom col-sm-10 my-2 text-lg-left">
        <p>Создание заметки</p>
    </div>
    <input type="text" class="name_note form-control form-control-lg col-sm-10 my-2" name="name_note"
           placeholder="Note name">
    <textarea class="text_note form-control form-control-lg col-sm-10 my-2 " placeholder="Note text" name="text_note"></textarea>
    <button class="button_send btn btn-primary btn-lg my-2" onclick="saveNewNote(event)" name="save_new-note">Save</button>
</form>