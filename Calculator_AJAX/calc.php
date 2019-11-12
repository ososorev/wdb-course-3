<?php
 $num1=$_REQUEST["num1"];
 $num2=$_REQUEST["num2"];
 $schet=$_REQUEST["schet"];
 if ($schet=="+"){
		$result = $num1+$num2;
}
	else if ($schet=="-"){
			$result= $num1-$num2;
}
		else if ($schet=="*"){
				$result=$num1*$num2;
}
			else if ($schet=="/")
				 if ($num2=="0"){
					 $result="Ошибка: Деление на 0";
				 }
				 else
				{			
					 $result=$num1/$num2;
}				


$link=mysqli_connect("localhost","root","","Table_result");
mysqli_query($link," INSERT  INTO `Result`(`num1`,`operator`,`num2`,`result`) VALUES ('$num1','$schet','$num2','$result')");
echo $result;
?>