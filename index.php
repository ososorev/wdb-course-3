<?php 
	$connection = mysqli_connect("localhost", "root", "", "calc");
	$s1 = (int)$_REQUEST ["first"];
	$s2 = (int)$_REQUEST ["two"];
	$act = $_REQUEST ["produce"];
	$out = $_REQUEST ["produce"];
	$result = "Результат";
	if (!empty($out)){
    	$result = calc($s1, $s2, $act);
		echo "$result<br/>";
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
	mysqli_query($connection, "INSERT INTO calculator(first, produce, two, output) VALUES ('$s1', '$act', '$s2', '$result')");
	if ($resource = mysqli_query($connection, 'SELECT * FROM calculator ORDER BY id DESC LIMIT 5')) {
    	while( $row = mysqli_fetch_assoc($resource) ){
			printf("%s)   %s %s %s = %s<br/>", $row['id'], $row['first'], $row['produce'], $row['two'], $row['output']);
		}
	}
?>
