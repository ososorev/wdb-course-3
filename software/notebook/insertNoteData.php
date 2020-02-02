<?php
header ('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

$inputNoteName = $_REQUEST["inputNoteName"];
$inputNoteDate = $_REQUEST["inputNoteDate"];
$inputNoteContent = $_REQUEST["inputNoteContent"];

$username = getFromSession('username');
if (empty($username)) {
    $username = $_REQUEST["username"];
}

if (!empty($inputNoteName) && !empty($inputNoteDate)) {
    NoteDatabase::insertNoteData($inputNoteName, $username, $inputNoteDate, $inputNoteContent);
} else {
    echo "Заполните обязательные поля Name, Date";
}
