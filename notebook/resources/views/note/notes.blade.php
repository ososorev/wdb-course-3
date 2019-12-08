@extends('layouts.app')

@push('scripts')
    <script type="text/javascript">
    function addNote(event){
            event.preventDefault();
        /*     $.post('/get_notes');
         alert('121313131');

     }*/
/*        $(window).load('load', function () {
            $('.note_name').click(function(){
             event.preventDefault();
             $.post('/get_notes');
            });
        })*/

     // $('.add_note').click(function () {
          var btn = $(this)
          //btn.button('loading')
          $.ajax({
              url: "get_notes", // url запроса
              cache: false,
              //data: { ids: ids }, // если нужно передать какие-то данные
              type: "POST", // устанавливаем типа запроса POST
              beforeSend: function(request) {  // нужно для защиты от CSRF
                  return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
              },
              //success: function(html) { $('#content').append(html);} //контент подгружается в div#content
          }).always(function () {
              btn.button('reset')
          });
          return false
     // });
}
    </script>
@endpush
@section('content')
    <main class=" container-fluid align-top">
        <div class="content row">
            <div class="col-4 border-right">
                <form role="search" class="mb-3 mt-3">
                    <div class="input-group">
                        <input type="text" class="form-control search_input" placeholder="Поиск">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                        </span>
                    </div>
                </form>
                <div class="list_notes">
                    <table class="table_notes table table-striped table-hover">
                        <tbody>
                            @foreach($notes as $note)
                                <tr class="notes item-{{$note->id}}">
                                    <td class="note_name">{{$note->name}}</td>
                                    <td class="note_date">{{$note->created_at}}</td>
                                    <td class="marker">✐</td>
                                    <td class="marker">✖</td>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <button class="add_note btn btn-primary btn-lg btn-block" onclick="addNote(event)">Add note</button>
            </div>
            <div class="col-8 border-left">
                @yield('work_area')
            </div>
        </div>
    </main>
@endsection

