<?php
header ('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

$noteId = $_REQUEST["noteId"];
$result='';

$result = NoteDatabase::noteSelect($noteId);
//print_r($result);
echo $result[note_name];