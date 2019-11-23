<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SUPER NOTEBOOK</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/index.js"></script>
    <script src="js/resetErrorContainer.js"></script>
    <script src="jsObject/ObjectForm.js"></script>
    <script src="js/generateRegForm.js"></script>
    <script src="ajax/sendRegFormAjax.js"></script>
    <script src="js/start.js"></script>

    <script>
        window.addEventListener("load", App.generateRegForm);
    </script>
</head>
<body>
    <div class="header">
        <div class="header__content bg-gray center flexContainer">
            super notebook
        </div>
    </div>
    <div class="content">
        <div class="registration flexContainer column">
            <div class="registration__ok"></div>
        </div>
    </div>
    <div class="footer">
        <div class="footer__content bg-gray flexContainer">
            Copyright by Mikhaylova, 2019
        </div>
    </div>

</body>
</html>