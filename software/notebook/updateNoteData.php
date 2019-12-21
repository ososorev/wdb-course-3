<?php
header ('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

$noteId = $_POST['note_id'];
$inputNoteName = $_REQUEST["inputNoteName"];
$inputNoteDate = $_REQUEST["inputNoteDate"];
$inputNoteContent = $_REQUEST["inputNoteContent"];

NoteDatabase::updateNote($noteId, $inputNoteName, $inputNoteDate, $inputNoteContent);
