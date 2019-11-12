<?php
class Database
{
    private $num1;
    private $num2;
    private $schet;
    private $result;

    public function __construct($num1, $schet, $num2, $result)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->schet = $schet;
        $this->result = $result;
    }

    function connection() 
    {
        return mysqli_connect("localhost", "root", "", "Table_result");
    }

    public function INSERT()
    {
        mysqli_query($this->connection(),"INSERT  INTO `Result`(`num1`,`schet`,`num2`,`result`) VALUES ('$num1','$schet','$num2','$result')");
    }
    public function fetch()
    {
        $resultat = mysqli_query($this->connection(),"SELECT * FROM Result ORDER BY id DESC LIMIT 5");
        $rows = [];
        foreach($resultat as $row)
        {
            $rows[]=$row;
        }
        return $rows;
    }
}
?>
