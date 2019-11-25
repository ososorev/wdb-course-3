
<?php
$email = $_GET['password'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "Адрес указан корректно.";
}
else{
echo "Адрес указан не правильно.";
}
?>

<html>
    <head>
        <style>
            .div{
            text-align: center ;
            background-color: gray;
            border: 4px solid grey;

            }
            body {
                margin: 0;
            }
            .form {
            width: 300px;
            height: 600px;
            position: absolute;
            top: 40%;
            left: 42%;
            }
            .input{
                margin: 5px ;
                border: 1px solid black
            }
            
        </style>


    </head>
    <body>
        <div class="div">Super Notebook</div>
        <form class="form">
                <input class="input" type="text"  name="username" placeholder="Username">
                <input class="input" type="text"  name="password" placeholder="Password">
                <br>
                <input class="input" type="text"  name="confirm" placeholder="Confirm Password">
                <br>
                <input class="input" type="text"  name="email" placeholder="Email">
                <br>
                <input class="input" type="submit"  name="register" placeholder="Register">
        </form>
        
        
    </body>
</html>