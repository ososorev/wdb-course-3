<?php
//Сначала разрешим принимать и отправлять запросы на сервер А
header('Access-Control-Allow-Origin: *');
//Установим типы запросов, которые следует разрешить (все неуказанные будут отклоняться)
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
//Разрешим передавать Cookie и Authorization заголовки для указанновго в Origin домена
header('Access-Control-Allow-Credentials: true');
//Установим заголовки, которые можно будет обрабатывать
header('Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Accept, X-PINGOTHER, Content-Type');

header ('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

// $username = getFromSession('username');
$username = "Alex";

$result = NoteDatabase::resultsNoteOfListSelect($username);
print_r(json_encode($result));

// echo json_encode(["name" => "test"]);