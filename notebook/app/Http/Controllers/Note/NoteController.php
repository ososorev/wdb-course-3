<?php
namespace App\Http\Controllers\Note;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Note;
use phpDocumentor\Reflection\Types\This;


class NoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $userID = Auth::user()->getAuthIdentifier();
        $notes = Note::where('user_id', 'like', $userID)->get();
        return view('note\notes', ['notes' => $notes]);
    }


    public  function view(Request $request){
        $note_id = $request->input('note_id');
        $note = Note::where('id', 'like', $note_id)->first();
        return view('note\view',['name' => $note->name, 'created_at' => $note->created_at, 'content' => $note->content]);
    }


    public function editData(Request $request){
        $note_id = $request->input('note_id');
        $note = Note::where('id', 'like', $note_id)->first();
        return view('note\edit', ['name' => $note->name, 'created_at' => $note->created_at, 'content' => $note->content]);
    }


    public function saveEditNote(Request $request){
        $Note = Note::where('id', "like", $request->input('id_note'));
        $Note->name = $request->input('name_note');
        $Note->content =  $request->input('name_note');
        $Note->created_at = $request->input('datetime_create');
        $Note->save();
        return view('note\modal\saveNewNote');
    }


    public function delete(Request $request){
        $note_id = $request->input('note_id');
        Note::destroy($note_id);
        return "Заметка удалена";
    }

    public function create(){
        return view('note\create');
    }


    public function saveNewNote(Request $request){
        $Note = new Note;
        $Note->name = $request->input('name_note');
        $Note->content =  $request->input('text_note');
        $Note->user_id = Auth::user()->getAuthIdentifier();
        $Note->save();
        return view('note\modal\saveNewNote');
    }
}