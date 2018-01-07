<html>
<title>php三大流程控制</title>
<body>
<p>
php三大流程控制:<br/>
1.顺序控制:所谓顺序控制流程，就是不加控制的流程。<br/>
<br/>
2.分支控制：简单定义：有选择的来执行我们的代码<br/>
2.1.单分支：基本语法：if(条件表达式){语句;...}<br/>
 这里的(条件表达式)运行结果是true或false;<br/>
2.2.双分支：基本语法：if(条件表达式){多语句;...}else{多语句;...}<br/>
<br/>
2.3.多重分支：基本语法:if(条件表达式){多语句;...}else if(条件表达式){多语句;...}...else{多语句;}<br/>
一.else if可以有一个，也可以有多个，else可以没有<br/>
二.如果遇到的表达式为true,则执行对应语句，然后跳出分支，不会再执行其它的else if了。<br/>
<br/>
2.4.switch分支语句<br/>
基本语法结构<br/>
switch(表达式){<br/>
	case 常量1:<br/>
	  //n多语句;<br/>
	  break;<br/>
	 case 常量2:<br/>
	  //n多语句;<br/>
	  break;<br/>
	  ...
	  default:<br/>
	  //n多语句;<br/>
	  break;<br/>
}<br/>
注意：<br/>
1.case语句有一到多;<br/>
2.default语句可以没有(根据自己代码的业务逻辑)<br/>
3.通常，在case语句后，要带break,表示退出switch语句。<br/>
4.常量的类型(int,float,字符串，布尔型，null)<br/>
<br/>
最终的结论是：<br/>
switch语句首先按照case顺序进行匹配，<br/>
如果都没有匹配到，则执行default语句的内容，直到遇到break,<br/>
则跳出switch(default语句可以放在任意位置)<br/>
<br/>





</p>
<font size="5" color="green">以下是php案例代码内容：</font>
<br/>

<?php
//2.2.双分支：基本语法：if(条件表达式){语句;...}
$age=13;
if($age>18){
	echo '你的年龄大于18岁';
}else {
	echo '你还未成年';
	}
	echo '<br/>程序结束';
	echo '<br/>';
//2.3.多分支：if(条件表达式){多语句;...}else if(条件表达式){多语句;...}...else{多语句;}
$age=30;
if($age>18){
	echo '你要被送入监狱';
}else if($age>10 && $age<=18){
	echo '送入少管所';
}else{
	echo '下次注意';
}
    echo '<br/>over';
	echo '<br/>';

//2.4.switch语句
//变量给的字
//小数，字符串，布尔类型。也可以进行switch的匹配
$myChat="1.1";
switch($myChat){
 case 1.1://输出今天是星期一
	echo '今天星期一';
	break;
  case 2:
	echo '今天星期二';
	break;
 case 3:
	echo '今天星期三';
	break;
 default:
    echo '没有匹配的日期';
}
	echo '<br/>';

//**********************
/*
说明:
1.可以使用布尔类型。
2.当用布尔类型匹配时，会自动转换类型。
3.如果匹配到一个入口case,则就会一直执行，直到遇到break;
4.最终的结论是：switch语句首先按照case顺序进行匹配，
如果都没有匹配到，则执行default语句的内容，直到遇到break,
则跳出switch(default语句可以放在任意位置)
*/
$a=true;
switch($a){
 case false;
	echo 'true1';
	break;
 case "2";//输出hello2
	echo 'hello2';
  //break;
 case 222:
    echo 'hello222';//输出hello222
	break;
 default:
    echo 'default';
}
	echo '<br/>';
//**************************
$i=11;
switch($i){
	case 10:
	echo '10';
	
	case 11.1:
	echo '11.1';
	break;
	
	default:
	echo 'hello';
	//break;
	
	case 11.2:
	echo "11.2";
	break;
}



?>

<body>

</html>