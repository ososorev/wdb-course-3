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
		<title>Notebook</title>
	</head>
	<body>
		<nav style="height: 60px;" id="topRow" class="navbar justify-content-center bg-secondary text-white">
			<div class="col-auto text-white" id="name">Welcome, </div>
<!--
				<script type="text/javascript">
					$(document).ready(function() {
						$.get("/index", function(data) {
							$("#name").html($("#name", data).html())
						});
					});
				</script>
-->
			<a class="col-auto btn btn-outline-light" href='index.html'>Logout</a>
		</nav> <!-- Верхняя строка -->
		<div class="container-fluid"> <!-- Контейнер общий -->
			<p>
			<div class="row">
				<div id="search" class="search"> <!-- Поиск -->
					<input id="searchBox" type="search" name="search" placeholder="Search"> <!-- Поле поиска -->
					<input id="searchButton" type="submit" value="&#128269"> <!-- Значок поиска -->
				</div>
			</div>
			</p>
			<div class="row"> <!-- Разделение на поля -->
				<form>
				<div id="noteContainer" class="col-auto"> <!-- Левое поле -->
				</div>
				</form>
				<div id="editContainer" class="col"> <!-- Правое поле -->
				</div>
			</div>
			<p>
			<div class="row">
				<div class="col">
					<button id="addNewNote" type="button" class="btn btn-outline-dark w-100" onclick="addNewNote(); this.disabled=true;">Add new note</button> <!-- Кнопка для добавления новой записи в правом поле -->
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