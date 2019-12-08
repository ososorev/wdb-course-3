@extends('layouts.app')
@push('scripts')
    <script type="text/javascript" src="{{ asset ('js/note/create.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/note/delete.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/note/edit.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/note/view.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/note/eventListener.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/note/saveNewNote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/components/moment.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

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
                                <tr class="note_item-{{$note->id}}">
                                    <td class="note_name view_note">{{$note->name}}</td>
                                    <td class="note_date">{{$note->created_at}}</td>
                                    <td class="edit_note">✐</td>
                                    <td class="delete_note">✖</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <button class="create_note btn btn-primary btn-lg btn-block">Add note</button>
            </div>
            <div class="work_area col-8 border-left">
                @yield('work_area')
            </div>
        </div>
    </main>
@endsection
@include('note.modal.deleteNote')
