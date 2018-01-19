<?php

require_once 'Cat.class.php';

//接收数据（计算）

//首先接收doing值
$doing=$_REQUEST['doing'];
//echo $doing;
$cat1=new Cat();
if($doing=="jisuan"){
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$oper=$_REQUEST['oper'];

echo '计算结果='.$cat1->jisuan($num1,$num2,$oper);

}else if($doing=="yuan"){
	$radius=$_REQUEST['radius'];
	echo '计算结果是'.$cat1->jisuanyuan($radius);
}



?>