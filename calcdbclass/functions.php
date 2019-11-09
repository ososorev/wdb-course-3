<?php

class DataBase{
    private $host;
    private $user;
    private $pass;
    private $nameDB;
    private $connection;

    function __construct($host, $user, $pass, $nameDB){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->nameDB = $nameDB;
        $this->openConnect();
    }

    private function openConnect(){
        $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->nameDB);
    }

    private function parseForInsert($data){
        $strKey = null;
        $strValue = null;
        foreach ($data as $key => $value){
            if($strKey!=null){
                $strKey.=",";
            }
            if( $strValue!=null){
                $strValue.=",";
            }
            $strKey .= "`".$key."`";
            $strValue .= "'".$value."'";
        }
        return array('keys'=>$strKey, 'values'=>$strValue);
    }

    function parseToSelect($data){
        $strKey = null;
            foreach ($data as $key){
                if($strKey!=null){
                    $strKey.=",";
                }
                $strKey .= "`".$key."`";
            }
         return $strKey;
    }

    function insert($tableName, $data){
        $parseData = $this->parseForInsert($data);
        $query = "INSERT INTO `".$tableName."`(".$parseData['keys'].") VALUES (".$parseData['values'].")";
        mysqli_query($this->connection, $query);
    }



    function select($arrWhat, $tableName, $order, $sort, $limit){
        $query = "SELECT ".$this->parseToSelect($arrWhat)."FROM `".$tableName."` ORDER BY `".$order."` ".$sort." LIMIT ".$limit;
        $sqlResult = mysqli_query($this->connection, $query);
        $arrResult = null;
        foreach ($sqlResult as $row){
            $arrResult[] = $row;
        }
        return $arrResult;
    }

}

function calculationResult($number1,$number2, $operator){
    if (is_numeric($number1) && is_numeric($number2)) {
        switch ($operator) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '/':
                $result = ($number2 == 0) ? "На ноль делить низя." : $number1 / $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
        }
    } else {
        $result = "Похоже вы ввели не числа...";
    }
    return $result;
}

function parseArrayToHtml($arr)
{
    $result = null;
    foreach ($arr as $row){

        $result = $result . '<div>' . $row['number_1'] . ' ' . $row['operator'] . ' ' . $row['number_2'] . ' = ' . $row['result'] . '</div>';
    }
    return $result;
}



