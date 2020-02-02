<?php
header ('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

$noteId = $_POST['id_note'];

NoteDatabase::deleteNote($noteId);
