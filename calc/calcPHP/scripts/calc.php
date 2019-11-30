<?php
	$chislo_1=(int)$_REQUEST['i1'];
	$chislo_2=(int)$_REQUEST['i2'];
	$action=$_REQUEST['select'];
	$click=$_REQUEST['button'];
	$result="Здесь будт результат";

	function math($a, $b, $act){
		if (empty($a)){
			$res = "Выберите первое число";
		}
		else if (empty($b)){
			$res = "Выберите второе число";
		}
		else{
			if ($act == "none"){
				$res = "Выберите действие";
			}
			else if ($act == "+"){
				$res = $a + $b;
			}
			else if ($act == "-"){
				$res = $a - $b;
			}
			else if ($act == "*"){
				$res = $a * $b;
			}
			else if ($act == "/"){
				if ($b == (int)0) {
				$res= "Деление на ноль невозможно";
				}
				else {
					$res = $a / $b;
				}	
			}
		}
		return $res;
	}

if (!empty($click)){
	$result = math($chislo_1, $chislo_2, $action);
}
?>