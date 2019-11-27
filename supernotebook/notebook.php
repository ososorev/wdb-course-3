<?
    require('php/userPage.php');
    require('php/modalDelete.php');
    require('php/modalCreate.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SUPER NOTEBOOK</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/ru.js"></script>
    <script src="js/bootstrap/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://use.fontawesome.com/4c58a82fe2.js"></script>
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">


    <script src="js/index.js"></script>
    <script src="js/generateNote.js"></script>
    <script src="js/start.js"></script>
    <script src="ajax/getNoteListAjax.js"></script>
    <script src="js/start.js"></script>
    <script src="ajax/saveNoteAjax.js"></script>
    <script src="ajax/delNoteAjax.js"></script>
    <script src="ajax/editNoteAjax.js"></script>
    <script src="ajax/logoutAjax.js"></script>




    <script>
      document.addEventListener("DOMContentLoaded", App.getNoteListAjax);
    </script>
</head>
<body>
<header class="header">
    <div class="container-fluid header__content bg-gray center flexContainer column">
        <div>SUPER NOTEBOOK</div>
        <div>Welcome, <a class="username" href="#"><?echo $user->getUserName();?></a>.
            <a class="logout" onclick="App.logoutAjax(event)" href="#">Logout</a>
        </div>
    </div>
</header>

<main class=" container-fluid align-top">
    <div class="content row">
        <div class="col-4 border-right">
            <form role="search" class="mb-3 mt-3">
                <div class="input-group">
                    <input type="text" class="form-control search_input" placeholder="Поиск">
                    <button class="btn btn-primary" onclick="App.searchNote()" type="button">
                            <i class="fa fa-search"></i>
                    </button>
	                </span>
                </div>
            </form>
            <div class="list_notes">
            </div>
            <button class="add_note btn btn-primary btn-lg btn-block" onclick="App.createNote()">Add note</button>
        </div>
        <div class="col-8 border-left">
            <div class="note_work_area row">

            </div>
        </div>
    </div>
</main>
<footer class="footer navbar-fixed-bottom">
    <div class="container-fluid footer__content bg-gray flexContainer">
        Copyright by Mikhaylova, 2019
    </div>
</footer>
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>