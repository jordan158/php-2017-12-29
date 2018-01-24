<html>
<head><h1>二.php错误日志保存</h1></head>
<body>
<h3>二.php错误日志保存</h3>
error_log($err_info."\r\n",3,"myerr.txt")<br/>
<br/>
1.输出当前时间：date("Y-m-d G:i:s");<br/>
 
2.设置时区：date_default_timezone_set("Asia/Chongqing");<br/>
(1.页面设置，2.在php.ini设置)<br/>


<?php

//1.打开文件，判断是否存在**********************************
/*
//打开文件
$fp=fopen("aa.txt","r");
echo "ok";


//1.判断文件是否存在
if(!file_exists("aa.txt")){
	echo "该文件不存在";
	eixt();
}else{
	$fp=fopen("aa.txt","r");
	echo "文件打开成功";
	//关闭
	fclose($fp);
}
echo "ok";
echo "<br/>";

//2.die();

if(!file_exists("aaa.txt")){
	die("文件不存在");
}else{
   $fp=fopen("aaa.txt","r");
	echo "文件打开成功";
	//关闭
	fclose($fp);
}

echo "ok";


echo "<br/>";


//3.更简洁的方法
file_exists("aaa.txt") or die("文件不存在");
echo "ok";

//如果函数正确，往下走，如果不正确，执行or后面的代码

echo "<br/>";


//*****************************************************************
//二自定义错误处理器（系统错误）
//1.自定义错误（处理器）处理方
function my_error($errno,$errmes){
	echo "<font size='5' color='red'>$errno</font><br/>";
	echo "错误信息是:".$errmes;
	exit();
	
}
//2.这里我们还需要改写set_error_handler();处理器。

set_error_handler("my_error",E_WARNING);


$fp=fopen("a.txt","r");

echo "<br/>";
*/
//三.自定义错误触发器（逻辑错误）*******



//自定义一个错误触发器（错误处理器结构一样）

function my_error3($errno,$errmes){
	$err_info="时间为".date("Y-m-d G:i:s")."错误号是:".$errno."--".$errmes;
	echo $err_info;
	//把这个错误信息保存
	//\r\n表示向文件输入一个回车换行
	//<br/>表示向网页输出一个回车换行。
	error_log($err_info."\r\n",3,"myerr.txt");
}
function my_error4($errno,$errmes){
	echo "出大事了".$errno;
	exit();//后的代码则不执行
}
//指定E_USER_WARNING错误级别的函数
set_error_handler("my_error3",E_USER_WARNING);
//set_error_handler("my_error4",E_USER_ERROR);
//这里的错误级别是：E_USER_ERROR,E_USER_WARNING,E_USER_NOTICE

$age=700;
if($age>120){
	//调用触发器
	trigger_error('你输入的年龄过大',E_USER_WARNING);
   echo "OK!";
}









?>



</body>
</html>