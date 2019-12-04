<?php
$inputUsername = $_REQUEST["inputUsername"];
$inputPassword = $_REQUEST["inputPassword"];
$buttonLog = $_REQUEST["buttonLogin"];
$error = '';
//$username = getFromSession('username');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style/main.css">
        <title>Notebook main</title>
        <script src="../js/main.js"></script>
    </head>
    <body>
        <div class="mainContainer">
            <div class="header">
                <div>SUPER NOTEBOOK</div>
                <div class="link">Welcome,
                    <a class="linkName" href='register.php'>
                        <?php echo $username?>
                    </a> .
                    <a class="linkName" href='input.php'>
                        Logout
                    </a>
                </div>
            </div>
            <div class="content">
                <div class="leftContainer">
                    <div class="searchBlock">
                        <input class="inputSearchBlock" type="text" placeholder="Search">
                    </div>
                    <div class="listOfNotesBlock">

                    </div>
                    <div class="buttonBlock">
                        <button type="button" class="buttonAddNote" name="buttonAddNote" onclick="addNewNote()">
                            Add new note
                        </button>
                    </div>
                </div>
                <!--<div class="betweenContainer"></div>-->
                <div class="rightContainerLook">
                    <div class="noteHeaderBlock">
                        <div class="noteNameBlock">Note 3</div>
                        <div class="noteDateBlock">02.10.2019</div>
                    </div>
                    <div class="infoBlock">Some note text here!</div>
                </div>
                <div class="rightContainerEdite">
                    <div class="noteHeaderBlock">
                        <span class="noteEditBlock">Edit mode</span>
                    </div>
                    <form id=form class="formBlock" method="post">
                        <input placeholder="Note 3" class="noteNameBlock inputForm" name="inputNoteName" type="text" required>
                        <input placeholder="02.10.2019" class="noteDateBlock inputForm" name="inputNoteDate" type="date" required>
                        <textarea placeholder="Line 1" class="infoBlock inputForm" name="inputNoteValue" required></textarea>
                        <div class="buttonBlock">
                            <input class="buttonSave" type="submit" name="buttonSave" onclick="closeAndRemove()" value="Save"/> <!-- send() -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="output"><?php echo $error ?></div>
            <div class="header footer">Copyright by ..., 2019</div>
        </div>
    </body>
</html>