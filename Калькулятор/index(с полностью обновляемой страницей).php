<?php 
	$s1 = (int)$_REQUEST ["first"];
	$s2 = (int)$_REQUEST ["two"];
	$act = $_REQUEST ["produce"];
	$out = $_REQUEST ["output"];
	$result = "Результат";
	if (!empty($out)){
    $result = calc($s1, $s2, $act);
}
function calc($s1, $s2, $act){
	if ($act == "+ (Сложение)") {
		$result = $s1+$s2;
	}
	else if ($act == "- (Вычитание)") {
		$result = $s1-$s2;
	}
	else if ($act == "* (Умножение)") {
		$result = $s1*$s2;
	}
	else if ($act == "/ (Деление)" && $s2 != "0") {
		$result = $s1/$s2;
	}
	else {
		$result = "На ноль делить нельзя";
	}
	return($result);
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Калькулятор</title>
		<link rel="stylesheet" href="buttons.css"/>
	</head>
	<body>
		<form>
		<center>
		<div class="s0">
			Введите первое число
			<br>
			<input type="number" class="s1" name="first" value="0" autofocus>
			<br>
			Введите второе число
			<br>
			<input type="number" class="s2" name="two" value="0">
			<br>
			<p>
			Произвести:
			<br>
			<select class="s3" name="produce">
			<option disabled>Выберите действие</option>
			<option>+ (Сложение)</option>
			<option>- (Вычитание)</option>
			<option>* (Умножение)</option>
			<option>/ (Деление)</option>
			</select>
			</p>
			<p>
			<input type="submit" class="s4" name= "output" value="Результат">
			</p>
			<p>
			<?php echo $result;?>
			</p>
		</div>
		</center>
		</form>
		
	</body>
</html>