<?php
 require_once ("Class2(1).php");
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
$db=new Database($num1,$schet,$num2,$result);
$db->INSERT();
$records = $db->fetch();
echo '<pre>';
foreach ($records as $record)
{
    echo '<div>'.$record['num1'].' '.$record['schet'].' '.$record['num2'].' = '.$record['result'].'</div>';
}
?>