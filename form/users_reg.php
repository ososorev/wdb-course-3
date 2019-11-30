<?php
	$connection= mysqli_connect("localhost", "root", "", "database");
	$userName=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$passwordCheck=$_REQUEST['pass_confrim'];
	$email=$_REQUEST['mail'];	

	class dataBase {
		private $conn;
		private $userName;
		private $password;
		private $email;

		function __construct($conn, $userName, $password, $email){
			$this->conn= $conn;
			$this->userName= $userName;
			$this->password= $password;
			$this->email= $email;
			$this->result= $result;
		}
		
		function insertData() {
			$sql ="INSERT INTO users(name, password, eMail) VALUES ('$this->userName', '$this->password', '$this->email')";
			mysqli_query($this->conn, $sql);
		}
	}
if (!empty($userName)||!empty($password)||!empty($passwordCheck)||!empty($email)){
	global $connection;
	global $userName;
	$sql = "SELECT EXISTS(SELECT `name` FROM `users` WHERE name = '$userName')";
	$result = mysqli_query($connection, $sql);
	print_r($result);
	exit();
}
	function validate($connection,$userName,$password,$passwordCheck,$email){
		$validate_res;
		if	(empty($userName)){
			$validate_res="Введите имя пользователя";
		}
		else if	(empty($password)){
			$validate_res="Введите пароль";
		}
		else if	(empty($passwordCheck)){
			$validate_res="Повторите пароль";
		}
		else if (empty($email)){
			$validate_res="Введите адресс почты";
		}
		else{
			if	(!validate_pass($password, $passwordCheck)){
				$validate_res="Пароли не совпадают";
			}
			else if	(!validate_mail()){
				$validate_res="Введите корректный адрес E-Mail`а";
			}
			else{
				$validate_res="Вы успешно зарегестрированны";
				if (validate_user($userName)){						// тут не работает проверка validate_user поэтому всегда будет регистрировать
					$validate_res="Вы успешно зарегестрированны";
					}
				else{
					$validate_res= "Такое имя пользователя уже занято";
				}
			}
		}		

		return($validate_res);
	}
	
	function validate_pass($pass_1, $pass_2){
		if ($pass_1==$pass_2){
			return(1);
		}
		else	{
			return(0);
		}
	}
	
	function validate_mail(){
		global $email;
		return (filter_var($email, FILTER_VALIDATE_EMAIL));
	}

	function validate_user($user_name){					// планировалась как проверка на уникальность имени юзера
		global $connection;
		$sql = "SELECT EXISTS(SELECT `name` FROM `users` WHERE name = '$user_name')";
		if (mysqli_query($connection, $sql)){  //данный запрос возвращает в любом случаее строку mysqli_result Object ( [current_field] => 0 [field_count] => 1 [lengths] => [num_rows] => 1 [type] => 0 ), а в phpMyAdmin`е значение 1 или 0, не знаю как вернуть в php те же 1 или 0
			return (1);
		}
		else {
			return(0);
		}
	}

	if (!empty($userName)||!empty($password)||!empty($passwordCheck)||!empty($email)){
		if (validate($connection,$userName,$password,$passwordCheck,$email) == "Вы успешно зарегестрированны") {
			$firstRequest = new dataBase($connection, $userName, $password, $email);
			$firstRequest-> insertData();
			echo (validate($connection,$userName,$password,$passwordCheck,$email));
			echo "<META HTTP-EQUIV='Refresh' content='2; URL=index.html'>";
        	exit(); 
		}
		else{
			echo(validate($connection,$userName,$password,$passwordCheck,$email));
			}
	}

?>