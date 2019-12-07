<?php
namespace App\Http\Controllers;


class NoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('notes');

        //return "hello";
    }
}