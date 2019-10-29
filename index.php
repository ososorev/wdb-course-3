<?php 
	$s1 = (int)$_REQUEST ["first"];
	$s2 = (int)$_REQUEST ["two"];
	$act = $_REQUEST ["produce"];
	$out = $_REQUEST ["produce"];
	$result = "Результат";
	if (!empty($out)){
    	$result = calc($s1, $s2, $act);
		echo $result;
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