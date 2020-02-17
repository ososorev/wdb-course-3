<?php
class Database {
    protected static $connection;

    public static function connect() {
        self::connection = mysqli_connect("localhost", "root", "", "notebook");
    }

    public static function query($sql) {
        mysqli_query(self::connection, $sql);
    }
}