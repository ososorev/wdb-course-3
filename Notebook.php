<?php
$connection = mysqli_connect("localhost", "root", "", "notebook"); // подключение к БД
$sql = mysqli_query($connection, "SELECT recordTitle, editDate FROM diary"); // форрмируется запрос к таблице
while($row = mysqli_fetch_array($sql)) // последовательно складываем в переменную $row которая является массивом строки результата запроса
$json = json_encode($row); // преобразование в JSON массив
echo $json; // вывод строки на страницу
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Собственные стили и скрипты -->
		<link rel="stylesheet" href="styles.css"/>
		<script src = "main.js"></script>
		<script src = "noteField.js"></script>
		<script src = "sendSave.js"></script>
		<title>Notebook</title>
	</head>
	<body>
		<nav style="height: 60px;" id="topRow" class="navbar justify-content-center bg-secondary text-white">Welcome, ...</nav> <!-- Верхняя строка -->
		<div class="container-fluid"> <!-- Контейнер общий -->
			<div class="row"> <!-- Разделение на поля -->
				<div id="noteContainer" class="col-md-auto"> <!-- Левое поле -->
					<br>
					<div id="search" class="search w-100"> <!-- Поиск -->
						<input id="searchBox" type="search" name="search" placeholder="Search"> <!-- Поле поиска -->
						<input id="searchButton" type="submit" value="&#128269"> <!-- Значок поиска -->
					</div>	
					<br>
					<body onLoad="addNewNoteLine();"></body> <!-- Скрипт на прорисовку всех заметок -->
					<div>
						<input id="addNewNote" type="button" class="btn btn-outline-primary w-100" value="Add new note" onclick="addNewNote();"> <!-- Кнопка для добавления новой записи в правом поле -->
					</div>
					<br>
				</div>
				<div id="editContainer" class="col"> <!-- Правое поле -->
				</div>
			</div>
		</div>
		<nav style="height: 60px;" class="navbar fixed-bottom justify-content-center bg-secondary text-white">Copyright by..., 2016</nav> <!-- Нижняя строка -->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>