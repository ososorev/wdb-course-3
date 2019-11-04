<?php
function sqlSave($a, $b, $s, $result)
{
    $connection = mysqli_connect("localhost", "root", "", "calc");
    $resource = mysqli_query(
        $connection,
        "SELECT a, b, s
        FROM histori
        ORDER BY id DESC
        LIMIT 1"
    );
    $story = [];
    foreach ($resource as $row){
        $story[] = $row;
    };
    if($story[0]['a']!=$a || $story[0]['b']!=$b || $story[0]['s']!=$s){
        mysqli_query(
            $connection, 
            "INSERT INTO histori(a, b, s, rezalt) VALUE ('$a','$b','$s','$result')"
        );
    }
};

function sqlReturn()
{
    $connection = mysqli_connect("localhost", "root", "", "calc");
    $resource = mysqli_query(
        $connection,
        "SELECT a, b, s, rezalt
        FROM histori
        ORDER BY id DESC
        LIMIT 5"
    );

    $story = [];
    foreach ($resource as $row){
        $story[] = $row;
    };
    return $story;
};

function viborka($story)
{
    $vivod = '';

    foreach ($story as $i=>$row){
        $vivod = $vivod.'<div class = "rezalt">'.$row['a'].' '.$row['s'].' '.$row['b'].' = '.$row['rezalt'].'</div>';
    }

    return $vivod;
}
?>