<?php 
	$connection = mysqli_connect("localhost", "root", "", "calc");
	$first = (int)$_REQUEST ["first"];
	$second = (int)$_REQUEST ["second"];
	$act = $_REQUEST ["produce"];
	$out = $_REQUEST ["produce"];
	$result = "Результат";
	if (!empty($out)){
    	$result = calc($first, $second, $act);
		echo "$result<br/>";
	}
	function calc($first, $second, $act){					
		if ($act == "+") {
			$result = $first+$second;
		}
		else if ($act == "-") {
			$result = $first-$second;
		}
		else if ($act == "*") {
			$result = $first*$second;
		}
		else if ($act == "/" && $second != "0") {
			$result = $first/$second;
		}
		else {
			$result = "На ноль делить нельзя";
		}
		return($result);
	}
	class DataBase {
		public $connect;
			public $first;
			public $act;	
			public $second;
			public $result;
				
		function __construct($connect, $first, $act, $second, $result) {
			$this->connect = $connect;
			$this->first = $first;
			$this->produce = $act;	
			$this->second = $second;
			$this->output = $result;
		}
		public function insert() {
			$insert = "INSERT INTO calculator(first, produce, second, output)";
			$insert .= "VALUES ('$this->first',";
            $insert .= "'$this->produce',";
            $insert .= "'$this->second',";
            $insert .= "'$this->output')";
 			mysqli_query($this->connect, $insert);
		}
	}
	$oneDataBase = new DataBase($connection, $first, $act, $second, $result);
	$oneDataBase->insert();


$dataSource = 'mysql:dbname=calc;host=localhost';
$user = 'root';
$password = '';
$db = new PDO($dataSource, $user, $password);
//$db->exec("INSERT INTO calculator(first, produce, second, output) VALUES ('$first', '$act', '$second', '$result')");
$resource = $db->query("SELECT * FROM calculator ORDER BY id DESC LIMIT 5");
while($row = $resource->fetch()) {
 printf("%s)   %s %s %s = %s<br/>", $row['id'], $row['first'], $row['produce'], $row['second'], $row['output']);
}


//	mysqli_query($connection, "INSERT INTO calculator(first, produce, second, output) VALUES ('$first', '$act', '$second', '$result')");
//	if ($resource = mysqli_query($connection, 'SELECT * FROM calculator ORDER BY id DESC LIMIT 5')) {
//    	while( $row = mysqli_fetch_assoc($resource) ){
//			printf("%s)   %s %s %s = %s<br/>", $row['id'], $row['first'], $row['produce'], $row['second'], $row['output']);
//		}
//	}
?>
