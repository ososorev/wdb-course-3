<?php
header ('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

$noteId = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['note_id'])) {
        $noteId = $_POST['note_id'];
    }
}

$result = NoteDatabase::noteSelect($noteId);
// echo json_encode($result);
print_r(json_encode($result));
