<?
    require('userPage.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SUPER NOTEBOOK</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="jsObject/ObjectForm.js"></script>
    <script src="js/generateNote.js"></script>

</head>
<body>
<div class="header">
    <div class="header__content bg-gray center flexContainer column">
        <div>SUPER NOTEBOOK</div>
        <div>Welcome, <a href="#"><?echo $user->getUserName();?></a>.
            <a href="#">Logout</a>
        </div>
</div>
</div>
<div class="content flexContainer">
    <div class="list_notes">
        <script>generateNoteList(<?echo json_encode($noteList);?>)</script>
    </div>
    <div class="see_note">
    </div>


</div>
<div class="footer">
    <div class="footer__content bg-gray flexContainer">
Copyright by Mikhaylova, 2019
</div>
</div>

</body>
</html>