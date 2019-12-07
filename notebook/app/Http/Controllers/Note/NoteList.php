<?php


namespace App\Http\Controllers\Note;
use App\Http\Controllers\Controller;


class NoteList extends Controller
{

    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        return "hi world";
    }
}
