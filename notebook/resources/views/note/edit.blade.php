
<form method="post" class="col-12 edit_note_form">
    @csrf
    {{ csrf_field() }}
    @method('POST')
    <div class="title_edit col-12 border-bottom col-sm-10 my-2 text-lg-left">
        <p>Edit node</p>
    </div>
    <input type="hidden" value="{{$id}}" name="id">
    <input value="{{$name}}" type="text" class="name_note form-control form-control-lg col-sm-10 my-2" name="name_note">
    <input value="{{$created_at}}" type="text" class="form-control datetimepicker-input col-sm-10 my-2"
           id="datetimepicker"
           name="datetime_create"
           data-toggle="datetimepicker"
           data-target="#datetimepicker">
    <textarea class="text_note form-control form-control-lg col-sm-10 my-2 " name="text_note">{{$content}}</textarea>
    <button class="button_edit_send btn btn-primary btn-lg my-2" onclick="saveEditNote(event)" name="save_button">Save</button>
</form>
<script>
    $("#datetimepicker").datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss'
    });
    $(document).ready($("#datetimepicker").val({{$created_at}}));
</script>

