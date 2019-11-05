<?php
	$connection= mysqli_connect("localhost", "root", "", "math");
	$chislo_1=(int)$_REQUEST['i1'];
	$chislo_2=(int)$_REQUEST['i2'];
	$action=$_REQUEST['select'];
	$result="Здесь будт результат";

	class dataBase {
		private $conn;
		private $chislo_1;
		private $action;
		private $chislo_2;
		private $result;

		function __construct($conn, $chislo_1, $action, $chislo_2, $result){
			$this->conn= $conn;
			$this->chislo_1= $chislo_1;
			$this->action= $action;
			$this->chislo_2= $chislo_2;
			$this->result= $result;
		}
		
		function insertData() {
			$sql ="INSERT INTO calc(first, action, second, result) VALUES ('$this->chislo_1', '$this->action', '$this->chislo_2', '$this->result')";
			mysqli_query($this->conn, $sql);
		}
	}


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
		$result = math($chislo_1, $chislo_2, $action);
		$firstRequest = new dataBase($connection, $chislo_1, $action, $chislo_2, $result);
		$firstRequest-> insertData();	
	}

	if ($rezilt= mysqli_query($connection, 'SELECT * FROM calc ORDER BY id DESC LIMIT 5')){
 	while( $row = mysqli_fetch_assoc($rezilt))
		{
            printf("%s %s %s %s = %s<br/>",$row['id'], $row['first'], $row['action'], $row['second'], $row['result']);
		}
	}

?>