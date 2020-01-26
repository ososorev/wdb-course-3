<?php 
session_start();
	if (!isset($_SESSION['ses_username'])) {
		$_SESSION['ses_username']= [];
	}
$connection = mysqli_connect("localhost", "root", "", "notebook"); // подключение к БД
$sql = mysqli_query($connection, "SELECT id, username FROM regist"); // форрмируется запрос к таблице
foreach($sql as $username);
echo $username->username;
?>
<!doctype html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Собственные стили и скрипты -->
		<link rel="stylesheet" href="styles.css"/>
		<script src = "main.js"></script>
		<script src = "search.js"></script>
		<title>Notebook</title>
	</head>
	<body>
		<nav style="height: 60px;" id="topRow" class="navbar justify-content-center bg-secondary text-white">
			<div class="col-auto text-white" id="name">Welcome, <?php $username ?></div>
			<button class="col-auto btn btn-outline-light" onclick="logout();">Logout</button>
		</nav> <!-- Верхняя строка -->
		<div class="container-fluid"> <!-- Контейнер общий -->
			<p>
			<div class="row" id="searchContainer">
				<div id="search" class="search col-auto input-group mb-3">
					<input id="searchBox" type="text" class="form-control" name="search" placeholder="Search"> <!-- Поле поиска -->
  					<div class="input-group-append">
						<input id="searchButton" type="submit" class="btn btn-outline-dark" value="&#128269" onclick = "FindOnPage(searchBox)"> <!-- Кнопка поиска -->
  					</div>
				</div>
			</div>
			<div class="row"> <!-- Разделение на поля -->
				<form>
				<div id="noteContainer" class="col-auto"> <!-- Левое поле -->
				</div>
				</form>
				<div id="editContainer" class="editContainer col"> <!-- Правое поле -->
				</div>
			</div>
			</p>
			<p>
			<div class="addNewNote row">
				<div class="col">
					<button id="addNewNote" type="button" class="addNewNote btn btn-outline-dark" onclick="addNewNote(); this.disabled=true;">Add new note</button> <!-- Кнопка для добавления новой записи в правом поле -->
				</div>
			</div>
			</p>
		</div>
		<nav style="height: 60px;" class="navbar fixed-bottom justify-content-center bg-secondary text-white">Copyright by..., 2016</nav> <!-- Нижняя строка -->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>