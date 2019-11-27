<?php 
	session_start();
	$i= count($_SESSION["arr"]);
	$s1 = (int)$_REQUEST ["first"];
	$s2 = (int)$_REQUEST ["two"];
	$act = $_REQUEST ["produce"];
	$out = $_REQUEST ["produce"];
	$result = "Результат";
	if (!empty($out)){
		$result = calc($s1, $s2, $act);
		echo "$result<br/>";
		$arr = array("$s1", "$act", "$s2", "$result");
		$i = count($_SESSION["arr"]);
		$_SESSION["arr"][$i] = $arr;
		if ($i<5){
		for ($s3 = 0; $s3<$i+1; $s3++){
			printf("%s %s %s = %s<br/>", $_SESSION["arr"][$s3][0], $_SESSION["arr"][$s3][1], $_SESSION["arr"][$s3][2], $_SESSION["arr"][$s3][3]);
			}
        }
		else{
			for ($s3 = $i-4; $s3<$i+1; $s3++){
				printf("%s %s %s = %s<br/>", $_SESSION["arr"][$s3][0], $_SESSION["arr"][$s3][1], $_SESSION["arr"][$s3][2], $_SESSION["arr"][$s3][3]);
			}
		}
	}
	function calc($s1, $s2, $act){
		if ($act == "+") {
			$result = $s1+$s2;
		}
		else if ($act == "-") {
			$result = $s1-$s2;
		}
		else if ($act == "*") {
			$result = $s1*$s2;
		}
		else if ($act == "/" && $s2 != "0") {
			$result = $s1/$s2;
		}
		else {
			$result = "На ноль делить нельзя";
		}
		return($result);
	}
?>
