<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="login/loginEnter.js"></script>
    <title>Форма входа</title>
</head>
<body>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="header">SUPER NOTEBOOK</div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form method="POST" action="">
                <input type="text" class="Username form-control form-control-lg" placeholder="Username">
                <input type="text" class="password form-control form-control-lg" placeholder="Password">
                <input  type="button" id="loginEnter" class="submit btn btn-lg btn-primary btn-block" value="Login" onclick="loginEnter()">
                <a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="footer">Copyright by Vasyankin, 2019</div>
        </div>
    </div>
</div>
</body>
</html>