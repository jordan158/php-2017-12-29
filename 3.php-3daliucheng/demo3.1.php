<html>
<title>php三大流程控制-循环控制</title>
<body>
<p>
3.循环控制流程:<br/>
3.1.for循环<br/>
for(循环初值;循环的条件;步长){
	//n多语句;
}

3.2.while循环。（先判断再执行）<br/>
while(循环条件){<br/>
	循环体;<br/>
}<br/>

3.3.do while循环。(先执行一次再判断)<br/>
基本语法结构：<br/>
do{<br/>
	//循环体<br/>
}while(循环条件);<br/>

</p>
<?php
//for循环*****************
for($i=0;$i<2;$i++){
	echo '<br/>你好，北京';
}
echo "over";
echo "<br/>";

//while循环*****************
$i=0;//$i循环控制变量
while($i<10){
	echo '<br/>你好北京';
	$i++;//这里对循环控制变量，自增。
}
echo "<br/>";

//do while循环****************

$i=0;//循环控制变量
do{
	echo '<br/>dowhile你好北京'.$i;
	//对循环控制变量修改
	$i++;//这里有程序员自己控制步长
}while($i<10);












?>
</body>
</html>