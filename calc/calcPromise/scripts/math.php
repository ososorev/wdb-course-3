<?php
	$chislo_1=(int)$_REQUEST['i1'];
	$chislo_2=(int)$_REQUEST['i2'];
	$action=$_REQUEST['select'];
	$result="Здесь будт результат";

	function math($a, $b, $act){				
				if ($act == "Действие"){
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
		return $res;
	}

if (!empty($action)){
	$result = math($chislo_1, $chislo_2, $action);
	echo $result;
}
?>