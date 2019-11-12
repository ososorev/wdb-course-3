<?php
 $num1=$_REQUEST["num1"];
 $num2=$_REQUEST["num2"];
 $schet=$_REQUEST["schet"];
  if ($schet=="+"){
		$result = $num1+$num2;
}
	else if ($schet=="-"){
			$result= $num1-$num2;
}
		else if ($schet=="*"){
				$result=$num1*$num2;
}
			else if ($schet=="/"){
				$result=$num1/$num2;
}
if(empty($num1) && empty($num2))
{
    $result = " ";
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form>
		<p>Число1: <input type="number" value="num1" name="num1"></p>
		<p>Число2: <input type="number" value="num2" name="num2"></p>
		<p> Выберете действие <select value="schet" name="schet">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
	<hr>
	<button type="submit" onclick=>Вычислить</button>
	</form>
	<p>Результат:<?php echo $result ?></p>
</body>
</html>