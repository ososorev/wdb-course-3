<?php
class dataBase
{
    private $connection;
    function __construct($host, $username, $password, $db)
    {
        $this->connection = mysqli_connect($host, $username, $password, $db);
        if($this->connection->connect_error)
        {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    public function query($sql)
    {
        mysqli_query($this->connection, $sql);
    }
    public function Select()
    {
        $resultat = mysqli_query($this->connection,"SELECT * FROM `Login`");
        $rows = [];
        foreach($resultat as $row)
        {
            $rows[]=$row;
        }
        return $rows;
    }
    public function Select_last_Note()
    {
        $resultat = mysqli_query($this->connection,"SELECT * FROM `Note`");
        $rows = [];
        foreach($resultat as $row)
        {
            $rows[]=$row;
        }
        return $row;
    }
    public function Select_note($note_id)
    {
        $resultat = mysqli_query($this->connection,"SELECT * FROM `Note` Where id= $note_id");
        foreach($resultat as $row)
        {
            $rows[]=$row;
        }
        return $row;
    }
   
    public function Update($note_id,$note,$date,$name)
    {
        $resultat = mysqli_query($this->connection,"UPDATE `Note` SET `id`='$note_id',`name`='$name',`date`='$date',`note`='$note' WHERE id= $note_id");
        foreach($resultat as $row)
        {
            $rows[]=$row;
        }
        return $row;
    }

    public function Delete_note($note_id)
    {
        $resultat = mysqli_query($this->connection,"DELETE FROM `Note` Where id= '$note_id'");
        return $resultat;
    }

}
?>
