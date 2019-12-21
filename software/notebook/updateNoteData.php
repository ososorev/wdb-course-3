<?php
header ('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

$noteId = $_POST['note_id'];
$inputNoteName = $_POST["inputNoteName"];
$inputNoteDate = $_POST["inputNoteDate"];
$inputNoteContent = $_POST["inputNoteContent"];

if (!empty($inputNoteName) && !empty($inputNoteDate)) {
    NoteDatabase::updateNote($noteId, $inputNoteName, $inputNoteDate, $inputNoteContent);
} else {
    echo "Заполните обязательные поля Name, Date";
}