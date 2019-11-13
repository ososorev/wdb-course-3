<?php
class Sql 
{
    private static function connection()
    {
        return mysqli_connect("localhost", "root", "", "test");
    }

    static function queryInsert($insert)
    {
        mysqli_query(self::connection(), $insert);
    }
}
?>