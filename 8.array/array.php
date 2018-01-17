<html>
<head>
<title>数组</title>
</head>
<body>
<p>
数组：<br/>
1.创建数组三种方式：<br/>
1.1.第一种方式:$array[0]=123;$array[1]="中国";$array[2]=12.5;<br/>
几个概念：<br/>
[0]->称为下标(关键字)。<br/>
$array[0]->称为数组的一个元素。<br/>
$array[0]=123->123表示$array[0]元素的值。<br/>
$array->这个是该数组的名称<br/>
在php数组中，元素存放的值可以是任意数据类型。<br/>
1.2.第二种方式：$a=array("字符串","浮点数",66.6,true,null)<br/>
1.3.第三中方式：（默认情况下，我们的元素的下标，是从0开始编号的，但实际上，也可以自己指定）<br/>
$arr['logo']="北京";<br/>
$arr['hsp']=123;<br/>
$arr=array("logo"=>"北北京","hsp"=>123,4=>678);<br/>
<br/>
2.遍历方式<br/>
两种遍历方式，第二种foreach遍历适合范围更广。<br/>
<br/>
3.注意事项<br/>
3.1.如果我们创建一个数组的时候，没有给某个元素指定下标，php就会自动<br/>
的用目前最大的那个下标值(整数)，加上一作为该元素的下标(关键字)。<br/>
3.2.如果我们给某个元素的下标一样，会覆盖原来的值。<br/>
3.3.如果一个元素下标为true或者false,则可以用下标为1或0表示。<br/>
3.4.$arr[true]<==>$arr[1];$arr[false]<==>$arr[0];$arr[null]<==>$arr[""]<br/>
3.5.print_r($arr);//显示数组的情况，var_dump($arr);//显示信息更详细<br/>
3.6.访问数组的时候不能越界，访问不存在的下标(键值)<br/>
3.7.php的数组是可以动态增长<br/>
<br/>
4.一维数组的引用<br/>
4.1基本语法$数组名[键名];
4.2.一维数组使用陷阱$foo[bar]="enemy";echo $foo[bar];//const bar="yy";
<br/>
5.php数组的几个重要函数。<br/>
5.1使用count函数统计数组条数，count($arr);<br/>
5.2.使用is_array函数判断数组is_array($arr);<br/>
5.3.print_r()和var_dump()【同是显示数据类型】可以显示数组。<br/>
5.4.拆份字符串explode explode("按照什么拆分",字符串);<br/>
5.5.unset()函数可以销毁某个元素，也可以销毁某个变量，
销毁该元素后，关键字不会重新组合<br/>

</p>

<?php
//遍历整个数组
//有时为了知道某个数组共有多少个元素，可以使用系统函数
//count(数组名)(该函数表示数组大小)
$arr=array(3,"hello",63.5,false,true,null);

$arr['logo']="北京";
$arr['hsp']=123;
/*
//for循环遍历
for($i=0;$i<count($arr);$i++){
	
	echo "下标为".$i."数组的值=".$arr[$i]."<br/>";
}
echo "数组的大小为".count($arr);

//while循环：

$i=0;//循环控制变量
while(i<count($colors)){
	echo "<br/>".$colors[i];
	$i++;
}

//do...while循环：
$i=0;
do{
	echo "<br/>".$colors[$i];
	$i++
}while($i<count($colors));





*/
//foreach适用范围更广(键名和键值可以随意名字)
foreach ($arr as $key1=>$val1){
	echo $key1."=".$val1."<br/>";
}
echo "<br/>";
//****************************************
$arr=array(5=>"logo",567,90);
//访问"logo"这个值
$arr[5]="yes";//替换某个元素值
echo $arr[5].$arr[6].$arr[7];
echo "<br/>";

//**************************************
$arr[true]="hello";//==>$arr[1]
$arr[false]="word";//==>$arr[1]
$arr[null]="北京";//==>$arr[""]
$arr[123.4]="hhh";//==>$arr[123]
//null<==>""
echo $arr[0].$arr[1].$arr[""].$arr[123];
print_r($arr);//显示数组的情况
echo "<br/>";
var_dump($arr);//显示信息更详细
/*
说明：
1.如果一个元素下标为true或者false,则可以用下标为1或0表示。
2.php很多地方null<==>"".
3.$arr[123.4]<==>$arr[123]
4.print_r($arr);//显示数组的情况，var_dump($arr);//显示信息更详细
5.访问数组的时候不能越界，访问不存在的下标(键值）
6.php的数组是可以动态增长
*/

//*****************************************************
$arr=array(56,100,101);
echo $arr[4];
echo "hello";


//字符串拆分*******************************
$str="北京&顺平&天兴&宋江";
$arr=explode("&",$str);
var_dump($arr);


//unset()函数*********************
$arr[0]=123;
$arr[1]=456;
$arr[2]="hello";

echo "<br>*****删除前****";
echo $arr[1];
unset($arr[1]);
echo "<br>*****删除后****";
echo $arr[1];







?>
</body>
</html>