<?php
    if ($_GET["first"])
    {
        $num1=$_GET["first"];
        $num2=$_GET["second"];
        $Operator=$_GET["operator"];
    
        if($Operator=="+")
        {
            $res=$num1+$num2;
        }
        elseif($Operator=="-")
        {
            $res=$num1-$num2;
        }
        elseif($Operator=="*")
        {
            $res=$num1*$num2;
        }
        elseif($Operator=="/")
        {
            $res=$num1/$num2;
        }
    }
    if(empty($num1) && empty($num2))
    {
        $res = "Error";
    }
    if(!empty($_REQUEST["res"]))
    {
        $enter = 'Answer $res';
    }
?>
<html>
    <head>
    </head>
    <body>
        <form id='calculator'>

            <input type='number' name='first' id='FirstValue' placeholder='Enter first value'/>
            <input type='number' name='second' id='SecondValue' placeholder='Enter second value'/>

            <select name='operator' id='SelectOperator'>
                <option value='+'>+</option>
                <option value='-'>-</option>
                <option value='*'>*</option>
                <option value='/'>/</option>
            </select>
            <input type='text' name='result' id='result' value='' placeholder='Result'/>
            <input type='submit' name='calculate' id='Calculate' value='Calculate'/>
        </form>
        let result = document.getElementById('result')
        result.value = <?php echo $enter?>
    </body>
</html>