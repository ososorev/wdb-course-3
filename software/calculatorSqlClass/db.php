<?php

class Database {
    private static function connection() {
        return mysqli_connect("localhost", "root", "", "calculate");
    }

    private static function query($sql) {
        return mysqli_query(self::connection(), $sql);
    }

    private static function checkingUniquenessOfLastExample($inputOne, $operation, $inputTwo) {
        $resource = self::query("SELECT first_operand, operation, second_operand 
        FROM calc ORDER BY id_calc DESC LIMIT 1");
        $prev = [];
        if (!empty($resource)) {
            foreach ($resource as $row) {
                $prev[] = $row;
            }
        } else {
            return true;
        }
        if ($prev[0]['first_operand'] != $inputOne || $prev[0]['operation'] != $operation ||
            $prev[0]['second_operand'] != $inputTwo) {
            return true;
        } else {
            return false;
        }
    }

    public static function insert($inputOne, $operation, $inputTwo, $result) {
        if (self::checkingUniquenessOfLastExample($inputOne, $operation, $inputTwo)) {
            self::query("INSERT INTO calc(first_operand, operation, second_operand, result)
        VALUES ('$inputOne', '$operation', '$inputTwo', '$result')");
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

    private static function fiveLastSelect() {
        $select = self::query("SELECT first_operand, operation, second_operand, result 
                FROM calc ORDER BY id_calc DESC LIMIT 5");
        return $select;
    }

    public static function resultsPrint() {
        $resource = self::fiveLastSelect();
        $calc = [];
        $print = '';
        if (!empty($resource)) {
            foreach ($resource as $i => $row) {
                $calc[] = $row;
                $print .= self::createdRow($calc, $i);
            }
        }
        echo $print;
    }
}
