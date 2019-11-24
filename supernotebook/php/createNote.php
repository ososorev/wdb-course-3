<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/phpClass/classDB.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/phpClass/note.php");
    $noteName = $_REQUEST['name_note'];
    $noteText = $_REQUEST['text_note'];
    session_start();
    $note =  new Note('');
    $note->add($noteName, $noteText, $_SESSION["user_id"]);





