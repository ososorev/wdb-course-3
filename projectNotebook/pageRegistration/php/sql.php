<?php
class sql 
{
    private static function connection()
    {
        return mysqli_connect("localhost", "root", "", "project");
    }

    static function queryInsert($insert)
    {
        mysqli_query(self::connection(), $insert);
    }

    static function querySelect($select)
    {
        $resource = mysqli_query(
            self::connection(), $select);
        $story = [];
        foreach ($resource as $row){
            $users[] = $row;
        };
        return $users;
    }
}
?>