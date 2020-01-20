import createNote from "./create.js";
import editNote from "./edit.js";
import viewNote from "./view.js";
import deleteNote from "./delete.js";

$(document).ready(function() {
    $('.create_note').on('click', createNote);
    $('.edit_note').on('click', editNote);
    $('.view_note').on('click', viewNote);
    $('.delete_note').on('click', deleteNote);
})
