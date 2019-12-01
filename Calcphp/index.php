<?php
    $num1=$_REQUEST['num1'];
    $num2=$_REQUEST['num2'];
    $operators=$_REQUEST['operators'];
    
    if ($num1==null or $num2==null){
        $res="Введите числа...";
    }
    elseif ($operators=="+"){
        $res=$num1+$num2;
    }
    elseif ($operators=="-"){
        $res=$num1-$num2;
    }    
    elseif ($operators=="*"){
        $res=$num1*$num2;
    }
    elseif ($operators=="/"){
        $res=$num1/$num2;
    }
     
?>
<html>
    <head> 
    <meta charset="UTF-8">
    <title>Calculator_PHP</title>
    <link href="style.css" rel="stylesheet" >
    </head>
        <body>
            <form>
                <p><input type="text" name="num1" class="Inn" placeholder="1-е число"></p>
                <select name="operators" class="Inn">
                    <option value="+">сложить</option>
                    <option value="-">вычесть</option>
                    <option value="*">умножить</option>
                    <option value="/">делить</option>
                </select>    
                <p><input type="text" name="num2" class="Inn" placeholder="2-е число"></p>
                <input type="submit" name="res" class="Reg" value="Считать" onclick = sendToServer(event) >
            </form>
            <div class="Inn">
                <?php
                   echo $res;
                ?>     
            </div>
        </body>
</html>
<?php
?>
