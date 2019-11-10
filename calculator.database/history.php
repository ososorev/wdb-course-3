<?php
require_once("database.php");
$database = new mydatabase ("localhost", "root",  "", "mybase");




$show_history = $database->fetch("SELECT `operand_1`,`operator`,`operand_2`,`result`,`time` FROM `history` ORDER BY time DESC LIMIT 5");
 
    echo json_encode($show_history);

?>