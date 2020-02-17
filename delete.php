<?php
require_once("Database.php");
$id = $_REQUEST ["id"];
// $connection = mysqli_connect("localhost", "root", "", "notebook");
// mysqli_query($connection, "DELETE FROM diary WHERE id=$id");

Database::connect();
Database::query("DELETE FROM diary WHERE id=$id");
?>