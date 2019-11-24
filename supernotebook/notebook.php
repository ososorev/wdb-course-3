<?
    require('php/userPage.php');
    require ('php/deleteNote.php');
    require('php/modalDelete.php');
    require('php/modalCreate.php');
    require('php/editNote.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SUPER NOTEBOOK</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/index.js"></script>
    <script src="js/generateNote.js"></script>
    <script src="js/start.js"></script>
    <script src="ajax/getNoteListAjax.js"></script>
    <script src="js/start.js"></script>
    <script src="ajax/saveNoteAjax.js"></script>
    <script src="ajax/delNoteAjax.js"></script>
    <script src="ajax/editNoteAjax.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/ru.js"></script>
    <script src="js/bootstrap/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">


    <script>
      document.addEventListener("DOMContentLoaded", App.getNoteListAjax);

    </script>
</head>
<body>
<header class="header">
    <div class="container-fluid header__content bg-gray center flexContainer column">
        <div>SUPER NOTEBOOK</div>
        <div>Welcome, <a href="#"><?echo $user->getUserName();?></a>.
            <a href="#">Logout</a>
        </div>
    </div>
</header>

<main class=" container-fluid align-top">
    <div class="content row">
        <div class="col-4 border-right">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>