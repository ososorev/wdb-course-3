<?php
require_once($_SERVER['DOCUMENT_ROOT']."/phpClass/classDB.php");
require_once($_SERVER['DOCUMENT_ROOT']."/phpClass/note.php");
$noteID = $_REQUEST['note_id'];
session_start();

$note = new Note($noteID);
if ($note->getUserId() == $_SESSION['user_id']){
    $note->delete();
}

