<?php
  $number1=$_REQUEST["first-number"];
  $number2=$_REQUEST["second-number"];
  $operation = $_REQUEST["option"];
  if (is_numeric($number1) && is_numeric($number2)){
    if ($operation === "+"){
      $result = $number1 + $number2;
    }elseif($operation === "-"){
      $result = $number1 - $number2;
    }elseif($operation === "*"){
      $result = $number1 * $number2;
    }elseif($operation === "/" && $number2!=0){
      $result = $number1 / $number2;
    }
  }
?>

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
      <input type="number" class="input-field second-field" name="second-number" >
      <button class="do-action" name="action-button">Вычислить</button>
      <input type="text" class="result-field" readonly value="<?php echo($result)?>">
      <form>
    </div>
  </div>
</body>

</html>
