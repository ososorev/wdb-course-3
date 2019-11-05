<?php

class Database {
    private $inputOne;
    private $inputTwo;
    private $operation;
    private $result;
    function _construct($inputOne, $operation, $inputTwo, $result) {
        $this->inputOne = $inputOne;
        $this->operation = $operation;
        $this->inputTwo = $inputTwo;
        $this->result = $result;
    }
    function connection() {
        return mysqli_connect("localhost", "root", "", "calculate");
    }
    public function insert() {
        $resource = mysqli_query(connection(), "SELECT first_operand, operation, second_operand 
      FROM calc ORDER BY id_calc DESC LIMIT 1");
        $last = [];
        foreach ($resource as $row) {
            $last[] = $row;
        }
        if ($last[0]['first_operand'] != $this->inputOne || $last[0]['operation'] != $this->operation ||
            $last[0]['second_operand'] != $this->inputTwo) {
            mysqli_query(connection(), "INSERT INTO calc(first_operand, operation, second_operand, result)
        VALUES ('$this->inputOne', '$this->operation', '$this->inputTwo', '$this->result')");
        }
    }
    function createdRow($arr, $index) {
        if ($arr[$index]['operation'] === '/' ) {
            $arr[$index]['operation'] = '\\';
        }
        $row = $arr[$index]['first_operand']." ".$arr[$index]['operation']." ".$arr[$index]['second_operand'].
            " = ".$arr[$index]['result']."<br />";
        return $row;
    }
    public function select() {
        $resource = mysqli_query(connection(), "SELECT first_operand, operation, second_operand, result 
      FROM calc ORDER BY id_calc DESC LIMIT 5");
        $calc = [];
        $print = '';
        foreach ($resource as $i => $row) {
            $calc[] = $row;
            $print = $print.createdRow($calc, $i);
        }
        echo $print;
    }
}
