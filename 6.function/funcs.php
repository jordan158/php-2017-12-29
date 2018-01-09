<?php
//计算+ - * 、的代码集合-->函数

//1.function是一个关键字
//2.jisuan函数名
//3.$num1,$num2,$oper是函数的参数列表（形参）

function jisuan($num1,$num2,$oper){
	
$res=0;//计算的结果。
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
   echo "运算符错误！";
  	
}
  
  return $res;
	
}
function abc(){
echo '我是funcs.php中的函数';
}







?>