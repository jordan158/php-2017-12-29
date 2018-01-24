<html>
<head><h1>错误处理</h1></head>
<body>
<h3>一.php错误处理三种方法</h3>
1.使用简单的die()语句<br/>

if(!file_exists("aaa.txt")){<br/>
	die("文件不存在");<br/>
}else{<br/>
   $fp=fopen("aaa.txt","r");<br/>
	echo "文件打开成功";<br/>
	//关闭<br/>
	fclose($fp);<br/>
}<br/>
2.更简单的方法<br/>
file_exists("aaa.txt") or die("文件不存在");<br/>
<br/>
<h3>二.创建自定义错误处理器（系统的错误）</h3>
1.在php中对错误有不同的级别<br/>
<h3>三.错误触发器（逻辑错误）</h3>
1.错误触发器<br/>
需求：有一段代码，如果接受一个年龄输入>120.我认为是一个错误<br/>
//传统的方法<br/>
if($age>120){<br/>
	echo "年龄过大";<br/>
	exit();<br/>
}<br/>



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
	echo "错误号是:".$errno;
	exit();
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