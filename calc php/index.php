<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="main">
    <div class="inner">
      <form>
        <input type="number" class="input-field first-field" name="first-number">
        <select name="option">
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
        </select>
        <input type="number" class="input-field second-field" name="second-number">
        <button class="do-action">Вычислить</button>
        <input type="text" class="result-field">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="js/calc.js"></script>
</body>

</html>
<?php

  $number1=$_REQUEST["first-number"];
  $number2=$_REQUEST["second-number"];
  $operation = $_REQUEST["option"];
  if ($operation === "+"){
    $result = $number1 + $number2;
    echo ($result);
  }elseif($operation === "-"){
    $result = $number1 - $number2;
    echo ($result);
  }elseif($operation === "*"){
    $result = $number1 * $number2;
    echo ($result);
  }elseif($operation === "/"){
    $result = $number1 / $number2;
    echo ($result);
  }

  $link = mysqli_connect("localhost", "root", "", "calcdb");
  $sql = "INSERT INTO calculator (first_number, operation, second_number, result) VALUES ('$number1', '$operation', '$number2','$result')";
  mysqli_query($link, $sql);

  $data = mysqli_query($link, "SELECT * FROM calculator ORDER BY id DESC LIMIT 5");

  // $array=[];
  // foreach ($data as $element){
  //   $array [] = $element;
    
  //   echo "<pre>";
  //   print_R($array);
  //   echo "</pre>";
  // }
  // // echo($array[0]);
echo("<br>");
  $row = $data->fetch_array(MYSQLI_ASSOC);
foreach ($row as $element){
    // $array [] = $element;
    echo("<br>");
    printf ("\n\tПервое число:%s <br>Операция:%s <br>Второе число:%s <br>Результат:%s <br>Дата:%s\n", $row["first_number"], $row["operation"], $row["second_number"], $row["result"], $row["date"]);
    echo("<br>");
    // echo "<pre>";
    // print_R($array);
    // echo "</pre>";
  }



//   echo("<br>");

//  $row = $data->fetch_array(MYSQLI_ASSOC);
// printf ("\n\tНомер: %s <br> Первое число:%s <br>Операция:%s <br>Второе число:%s <br>Результат:%s <br>Дата:%s\n", $row["id"], $row["first_number"], $row["operation"], $row["second_number"], $row["result"], $row["date"]);
?>

