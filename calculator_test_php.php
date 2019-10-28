<html>
    <head>
        <link rel="stylesheet" type = text/css href = "sheetstyle.css"/>
    </head>
    <body class="bckgrnd">
        <form method="POST">
            <input type="text" name="n1" class="firstinput" id="n1"/>
            <br>
            <input type="text" name="num2" class="firstinput" id="num2"/>
            <br>
            <p><select size="3" class="secondinput" name="oper" id="oper">
             <option disabled>Выберите действие</option>
             <option value="+">+</option>
             <option value="-">-</option>
             <option value="*">*</option>
             <option value="/">/</option>
            </select>
             <p>
             <input type="submit" class="b1">
        </form>

        <?php
        $n1 = $_POST['n1'];
        $num2 = $_POST['num2'];
        $oper = $_POST['oper'];
        

        if ($_POST['oper']){
            if ($oper=="+"){
                $result=$n1+$num2;
               }
               elseif ($oper=="-"){
                $result=$n1-$num2;
               }
               elseif ($oper=="*"){
                $result=$n1*$num2;
               }
               elseif ($oper=="/"){
                $result=$n1/$num2;
               }
        }
        
        ?>
        <div id="result" name="result" class="firstinput">
            <?php echo $result; ?>
        </div>
        
    </body>
</html>