<?php

class Sql 
{
    public $a;
    public $b;
    public $s;
    public $result;
    public $connection;

    function __construct($a, $b, $s, $result, $connection) 
    {
        $this->a = $a;
        $this->b = $b;
        $this->s = $s;
        $this->result = $result;
        $this->connection = $connection;
    }

    function save()
    {
        $resource = mysqli_query(
            $this->connection,
            "SELECT a, b, s
            FROM histori
            ORDER BY id DESC
            LIMIT 1"
        );
        $story = [];
        foreach ($resource as $row){
            $story[] = $row;
        };
        if($story[0]['a']!=$this->a || $story[0]['b']!=$this->b || $story[0]['s']!=$this->s){
            mysqli_query(
                $this->connection, 
                "INSERT INTO histori(a, b, s, rezalt) VALUE ('$this->a','$this->b','$this->s','$this->result')"
            );
        }
    }

    function histore()
    {
        $resource = mysqli_query(
            $this->connection,
            "SELECT a, b, s, rezalt
            FROM histori
            ORDER BY id DESC
            LIMIT 5"
        );

        $story = [];
        foreach ($resource as $row){
            $story[] = $row;
        };

        $vivod = '';
        foreach ($story as $i=>$r){
            $vivod = $vivod.'<div class = "rezalt">'.$r['a'].' '.$r['s'].' '.$r['b'].' = '.$r['rezalt'].'</div>';
        }

        return $vivod;
    }

}
?>