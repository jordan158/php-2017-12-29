<html>
<head>
<title>函数</title>
</head>
<body>
<p>
1.讨论函数之细节和其运行原理<br/>
.自定义函数的基本语法结构：<br/>
<br/>
//参数列表，用处是接收数据的。<br/>
<br/>
function 函数名(参数列表){<br/>
	//函数体;(完成某一功能的指令集合，必须有)<br/>
	//return语句;(主要的用处是返回一个结果，可以有可以没)<br/>
}<br/>
<br/>
2.a.php页面要使用b.php中定义的函数，可以使用以下指令：<br/>
require require_once include include_once<br/>
<br/>
2.1.举例require用法：<br/>
2.1.1: require '要引入的文件名';<br/>
2.1.2: <br/>
$filePath="b.php";<br/>
require $filePath;<br/>
2.1.3:require ('要引入的文件名(路径)');<br/>
2.1.4.php执行时，一旦遇到函数的调用，就会开辟一个新栈，执行该函数的代码，<br/>
执行完毕后，返回执行后续代码.<br/>
<br/>
2.2.require和require_once区别<br/>
前者遇到即包含文件，后者会判断是否己经包含过了，如果包含过了，<br/>
则不再包含文件，一可以节省资源，二可以避免重复定义的错误。<br/>
说明：一个php文件中不能存在二个相同的函数<br/>
<br/>
3.include和include_once区别：<br/>
3.1.相同点：作用和功能都可以把一个页面，包含到另外一个页面<br/>
基本用法：include ('被包含的文件');<br/>
           include 被包含的文件;<br/>
		   include $filePath;<br/>
3.2.区别：前者遇到即包含文件，后者会判断是否己经包含过了，如果包含过了，<br/>
则不再包含文件，一可以节省资源，二可以避免重复定义的错误。<br/>
<br/>

4.require和include区别：<br/>
4.1.require出现错误了会中止后续代码执行，includeb出现错误则会继续执行。<br/>
4.2.include当php页面执行到时，才会读入include所引入的php页面。<br/>
4.3.require引入，再调用。<br/>
<br/>
5.总结：<br/>
5.1.基本上使用：require_once。<br/>
5.2.放在页面的最前端<br/>



<br/>

</p>

<?php
//输入两个数，再输入一个运算符(+,-,*,/),得到结果



require 'funcs.php';//把funcs.php内容引入
$num1=50;
$num2=90;
$oper="*";

//要计算结时，直接调用函数


$res=jisuan($num1,$num2,$oper);
echo "计算结果是=".$res;

echo "<br/>";
abc();


/*
//2.通过变量引入
$fileName="funcs.php";
require $fileName;
abc();

//3.通过文件名路径引入
require ('funcs.php');
abc();
*/
echo "<br/>";
require 'b.php';
echo "<br/>";
require 'b.php';
echo "<br/>";
include 'b.php';
echo "<br/>";
include_once 'b.php';
echo "<br/>";


?>
<body>
</html>