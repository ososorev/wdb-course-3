<?php
	require_once('Database.php');
	Database::connect();

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
				if (validate_user($userName)){
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

	function validate_user($user_name){		
		global $connection;
		$res = mysqli_query($connection, "SELECT id FROM users WHERE name = '$user_name'");
		$row = mysqli_fetch_assoc($res);
		if (empty($row['id'])){
			return(1);
		}
		else{
			return(0);;
		}
	}

	if (!empty($userName)||!empty($password)||!empty($passwordCheck)||!empty($email)){
		$check_user = validate($connection,$userName,$password,$passwordCheck,$email);
		if ($check_user == "Вы успешно зарегестрированны") {
			$firstRequest = new dataBase($connection, $userName, $password, $email);
			$firstRequest-> insertData();
			echo ($check_user);
			echo "<META HTTP-EQUIV='Refresh' content='2; URL=index.html'>";
			exit(); 
		}
		else{
			echo($check_user);
			}
	}
?>