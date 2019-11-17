<?php

class Database {
    private static function connection() {
        return mysqli_connect("localhost", "root", "", "calculate");
    }

    private static function query($sql) {
        mysqli_query(self::connection(), $sql);
    }

    private static function checkingUniquenessOfExample($inputOne, $operation, $inputTwo) {
        $resource = static::query("SELECT first_operand, operation, second_operand 
      FROM calc ORDER BY id_calc DESC LIMIT 1");
        $prev = [];
        foreach ($resource as $row) {
            $prev[] = $row;
        }
        if ($prev[0]['first_operand'] != $inputOne || $prev[0]['operation'] != $operation ||
            $prev[0]['second_operand'] != $inputTwo) {
            return true;
        } else {
            return false;
        }
    }

    public static function insert($inputOne, $operation, $inputTwo, $result) {
        if (self::checkingUniquenessOfExample($inputOne, $operation, $inputTwo)) {
            self::query("INSERT INTO calc(first_operand, operation, second_operand, result)
        VALUES ($inputOne, $operation, $inputTwo, $result)");
        }
    }

    private static function createdRow($arr, $index) {
        if ($arr[$index]['operation'] === '/' ) {
            $arr[$index]['operation'] = '\\';
        }
        $row = $arr[$index]['first_operand']." ".$arr[$index]['operation']." ".$arr[$index]['second_operand'].
            " = ".$arr[$index]['result']."<br />";
        return $row;
    }

    public static function select() {
        $resource = self::query("SELECT first_operand, operation, second_operand, result 
      FROM calc ORDER BY id_calc DESC LIMIT 5");
        $calc = [];
        $print = '';
        foreach ($resource as $i => $row) {
            $calc[] = $row;
            $print .= self::createdRow($calc, $i);
        }
        echo $print;
    }
}
