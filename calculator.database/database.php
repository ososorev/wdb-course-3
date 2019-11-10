<?php
// $connection=mysqli("localhost", "root",  "", "mybase");

// mysqli_query($connection, "INSERT INTO result(input_result) VALUES('$input result')");

// $input_result = $_REQUEST["input_result"];

// $resourse = mysqli_query($connection, "SELECT * FROM `history` WHERE 1");

// $results = [];

// foreach ($resourse as $row) {
//     $results[] = $row
//     $row["id => 1,
//     "input_result" => "43"]

//     echo $row["input_result];
//     $row[0]["OperationOne"]
// }

//Видимо в БД нужны поля: id - operand1 - opreation - operand2 - result - created

class mydatabase {
    private $connection;
    function __construct($server, $username, $password, $mybase) {
        $this -> connection = mysqli_connect($server, $username, $password, $mybase);
    }
    
    function query ($sql) {
        mysqli_query ($this->connection, $sql);

    }

    function fetch ($sql) {
        $input_result = mysqli_query($this->connection, $sql);
        $rows = [];
        foreach ($input_result as $row) {
            $rows[]=$row;
        }

        //return json_encode($rows);
         return $rows;
    }
}

// $arr = json_decode($json, true);
// foreach($arr as $a){
//     foreach($a as $key => $value){
//         echo $key . " : " . $value . "<br />";
//     }
// }


?>
