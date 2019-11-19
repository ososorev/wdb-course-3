<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SUPER NOTEBOOK</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/index.js"></script>
    <script src="js/resetErrorContainer.js"></script>
    <script src="jsObject/ObjectForm.js"></script>>
    <script src="js/generateLoginForm.js"></script>
    <script src="ajax/sendLoginFormAjax.js"></script>
    <script src="js/start.js"></script>

    <script>
        window.addEventListener("load", App.start);
        window.addEventListener("load", App.generateLoginForm);
    </script>

</head>
<body>
<div class="header">
    <div class="header__content bg-gray center flexContainer">
        super notebook
    </div>
</div>
<div class="content flexContainer column">
    <div class="login flexContainer column">
    </div>
    <button class="button registration__form__item" onclick="document.location='register.php'">Register</button>
</div>
<div class="footer">
    <div class="footer__content bg-gray flexContainer">
        Copyright by Mikhaylova, 2019
    </div>
</div>

</body>
</html>
