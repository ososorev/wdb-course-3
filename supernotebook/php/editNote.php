<?php
require_once($_SERVER['DOCUMENT_ROOT']."/phpClass/classDB.php");
require_once($_SERVER['DOCUMENT_ROOT']."/phpClass/note.php");

$noteName = $_REQUEST['name_note'];
$noteText = $_REQUEST['text_note'];
$noteDate = $_REQUEST['datetime_create'];
$noteID = $_REQUEST['note_id'];
session_start();

$note = new Note($noteID);
if ($note->getUserId() == $_SESSION['user_id']){
    echo $note->update($noteName, $noteDate, $noteText);
}

//echo $noteName.' '.$noteText.' '.$noteID.' '.$noteDate;
