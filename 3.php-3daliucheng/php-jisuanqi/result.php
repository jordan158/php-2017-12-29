<?php
//接收用户从jisuanqi.php(对应静态页面，浏览器)提交的数据
//接收num1
//$_REQUEST 该方法可以接收用户的post或者get请求数据

$num=$_REQUEST['xx'];
if($num==null){
	echo '没有收到值';
}
if($num==""){
	echo '也没有值';
}
echo $num;

echo '<br/>';
/*
总结：应当保证接收数据的时候$_REQUEST['参数']要和
提交数据页面给出的html元素名字要一致，如果不一致，则会出现notice提示
同时我们接收的数据就是null等价于""

*/
//**********************************
$num1=$_REQUEST['num1'];

//接收num2
$num2=$_REQUEST['num2'];

//接收运算符
$oper=$_REQUEST['oper'];
//echo '接收到.'.$num1."||".$num2."||".$oper;
$res=0;
switch($oper){
 case "+":
	$res=$num1+$num2;
	break;
 case "-":
	$res=$num1-$num2;
	break;
 case "*":
	$res=$num1*$num2;
	break;
 case "/":
	$res=$num1/$num2;
	break;
 default:
   echo '运算符不正确';
}
echo '运算结果是：'.$res;

?>

<a href="jisuanqi.php"> 返回计算机器页用</a>









