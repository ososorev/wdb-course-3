window.$ = window.jQuery = require('jquery');
require('jquery-ui');
require('bootstrap');
window.moment = require('moment');
require('tempusdominus-bootstrap-4');
require('@fortawesome/fontawesome-free');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


//debugger;
require("./note/edit.js");
require("./note/resetListNotes.js");
require("./note/saveEditNote.js");
require("./note/saveNewNote.js");
require("./note/eventListener.js");




