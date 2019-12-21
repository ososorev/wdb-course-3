<?php
header ('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

$error = '';
$username = getFromSession('username');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/main.css">
        <title>Notebook main</title>
        <script src="js/main.js"></script>
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
                        <?php foreach (NoteDatabase::resultsNoteOfListSelect($username) as $item) {;?>
                            <div class="noteItemBlock">
                                <div class="noteItemName"><?php echo $item[note_name];?></div>
                                <div class="noteItemDate"><?php echo date("d.m.Y", strtotime($item[use_date]));?></div>
                                <div class="noteItemActions">
                                    <button class="editIcon" onclick="showNote(event, <?php echo $item[id_note];?>)"></button>
                                    <button class="deleteIcon" onclick="deleteNote(event, <?php echo $item[id_note];?>)"></button>
                                </div>
                            </div>
                        <?php };?>
                    </div>
                    <div class="buttonBlock">
                        <button type="button" class="buttonAddNote" name="buttonAddNote" onclick="addNewNote()">
                            Add new note
                        </button>
                    </div>
                </div>
                <div class="betweenContainer"></div>
                <div class="rightContainerInfo hidden">
                    <div class="noteHeaderBlockInfo">
                        <div class="noteNameBlockInfo">Note 3</div>
                        <div class="noteDateBlockInfo">02.10.2019</div>
                    </div>
                    <div class="infoBlockInfo">Some note text here!</div>
                </div>
                <div class="rightContainerCreate hidden">
                    <div class="noteHeaderBlockCreate">
                        <span class="noteEditBlock">Create mode</span>
                    </div>
                    <form id=form class="formBlock" method="post">
                        <input placeholder="Note 3" class="noteNameBlockEdit inputForm" name="inputNoteName" type="text" required>
                        <input placeholder="02.10.2019" class="noteDateBlockEdit inputForm" name="inputNoteDate" type="date" required>
                        <textarea placeholder="Line 1" class="infoBlockEdit inputForm" name="inputNoteContent" required></textarea>
                        <div class="buttonBlock">
                            <input class="buttonSave" type="submit" name="buttonSave" onclick="send(event)" value="Save"/>
                        </div>
                    </form>
                </div>
                <div class="rightContainerEdit hidden">
                    <div class="noteHeaderBlockEdit">
                        <span class="noteEditBlock">Edit mode</span>
                    </div>
                    <form id=form class="formBlock" method="post">
                        <input placeholder="Note 3" class="noteNameBlockEdit editName inputForm" name="inputNoteName" type="text" required>
                        <input placeholder="02.10.2019" class="noteDateBlockEdit editDate inputForm" name="inputNoteDate" type="date" required>
                        <textarea placeholder="Line 1" class="infoBlockEdit editContent inputForm" name="inputNoteContent" required></textarea>
                        <div class="buttonBlock">
                            <button class="buttonCancel" onclick="onClose()">Cancel</button>
                            <input class="buttonSave" type="submit" name="buttonSaveChanges" onclick="sendChanges(event)" value="Save changes"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="output"><?php echo $error ?></div>
            <div class="header footer">Copyright by ..., 2019</div>
        </div>
    </body>
</html>

<!--
http://localhost/wdb-course-3/software/notebook/main.php
$username = getFromSession('username');

<a href="register.php">
    <button type="button" onclick="register()" class="mainButton">Войти</button>
</a>
-->
