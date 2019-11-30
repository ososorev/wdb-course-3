<?php
	session_start();
	if (!isset($_SESSION['ses_result'])) 
		{
  		$_SESSION['ses_result']= [];
	}
	$chislo_1=(int)$_REQUEST['i1'];
	$chislo_2=(int)$_REQUEST['i2'];
	$action=$_REQUEST['select'];
	$result="Здесь будт результат";

	function math($a, $b, $act){				
				if ($act == "+"){
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
		$i= count($_SESSION["ses_result"]);
		$result= math($chislo_1, $chislo_2, $action);
		$result_arr= [$chislo_1, $action, $chislo_2, $result];
		$_SESSION["ses_result"][$i]=$result_arr;
		if ($i<5){
			for ($j= 0; $j<$i+1; $j++){
			printf("%s %s %s = %s<br/>", $_SESSION["ses_result"][$j][0], $_SESSION["ses_result"][$j][1], $_SESSION["ses_result"][$j][2], $_SESSION["ses_result"][$j][3]);
			}
		}
		else	{
			for ($j= $i-4; $j<$i+1; $j++){
			printf("%s %s %s = %s<br/>", $_SESSION["ses_result"][$j][0], $_SESSION["ses_result"][$j][1], $_SESSION["ses_result"][$j][2], $_SESSION["ses_result"][$j][3]);
			}
		}
		die();
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Калькулятор на php</title>
<link rel="stylesheet" href="styles/colors.css"/>
<script>
	function send(event){
		event.preventDefault();
		fetch("index.php",{method:"post", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("result").innerHTML=text;})
	}
</script>
</head>

<body bgcolor="#C0C0C0">
	<form>
	<input type="number" name="i1" class="size color_gray" value="0"/>
	<select name="select" style="width:100px; height:22px" class="color_gray">
    	<option disabled>Действие</option>
    	<option >+</option>
    	<option >-</option>
    	<option >*</option>
    	<option >/</option>
    </select>
	<input type="number" name="i2" class="size color_gray" value="0"/>
	<br/>
	<br/>
	<div id="result">Здесь будет результат</div>
	<br/>
	<input type="submit" value="Расчитать" class="color_gray" onclick="send(event)"/>
	</form>
	</body>
</html>
