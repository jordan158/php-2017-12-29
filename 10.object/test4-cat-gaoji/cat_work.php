<?php

require_once 'Cat.class.php';
$sel=$_REQUEST['sel'];
//echo $sel;
$cat1=new Cat(); 
if($sel=="aa"){
	//判断isset变量是否有值，如果有，则为true.
	if(isset($_REQUEST['num1'])){
	$num1=$_REQUEST['num1'];
	}
	$num2=$_REQUEST['num2'];
	$oper=$_REQUEST['oper'];
	//echo $num1."||".$num2."||".$oper;
  $jieguo=$cat1->fouryusuan($num1,$num2,$oper);
  
 //echo '四则运算结果='.$res;错误写法,
 //不能直接echo return返回的变量
   echo '四则运算结果='.$jieguo;
	
}else if($sel="bb"){
	$chang=$_REQUEST['chang'];
	$kuan=$_REQUEST['kuan'];
	//echo $chang."||".$kuan;
  $jieguo2=$cat1->juxing($chang,$kuan);
	
	echo '矩形面积='.$jieguo2;

	
}




?>