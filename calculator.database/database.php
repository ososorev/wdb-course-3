<?php

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
         return $rows;
    }
}

?>
