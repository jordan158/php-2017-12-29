<html>
<head>
<title>排序方法(程序员基本功)</title>
</head>
<body>

<p>
排序方法(程序员基本功),所谓排序就是对一组数据，按照某个顺序排列的过程。<br/>
一.内部排序法：把把所有数据都加载到内存中排序<br/>
二.外部排序法：数据量过大，无法全部加载到内存中<br/>
(数据量过大，需借助外部文件来完成)
1.交换式排序法<br/>
1.1.冒泡排序法<br/>
1.2.快速排序法<br/>
以中间数为标准。
2.选择排序法<br/>
3.插入排序法<br/>
冒泡法<选择排序法<插入排序法
快速排序法[空间和时间]
</p>
 
<?php
//冒泡排序法
/*
1.为了更好的使用，将其封装成一个函数。
2.数组默认传递的是值，不是地址。加个&表示传入地址
*/

$arr=array(0,5,-1,90,-100,300,52.1);

function maopao(&$arr){
$temp=0;//这是一个中间变量

//外层循
$flag=false;
for($i=0;$i<count($arr)-1;$i++){
	//内层循环
	for($j=0;$j<count($arr)-1-$i;$j++){
		//说明前面的数比后面的数大，就要交换
		if($arr[$j]>$arr[$j+1]){
			$temp=$arr[$j];
			$arr[$j]=$arr[$j+1];
			$arr[$j+1]=$temp;
			$flag=true;
		}
	}
	//判断
	if(!$flag){
		//己经是有序
		break;
	}
	$flag=false;
		
}
print_r($arr);//函数内是排好的。
echo "<br/>";
}
maopao($arr);
print_r($arr);
var_dump($arr);

//选择排序法****************
$arr1=array(2,6,1,-9,10,90);
function selectSort(&$arr1){
	$temp=0;//中间变量
	for($i=0;$i<count($arr)-1;$i++){
		//假设$i就是最小的数
		 $minVal=$arr1[$i];
		 //记录我认为的最小的数的下标
		 $minIndex=$i;
		 for($j=$i+1;$j<count($arr1);$j++){
			 
			 if($minVal>$arr1[$j]){
				 //说明我们认为的最小值，不是最小
				 $minVal=$arr1[$j];
				 $minIndex=$j;
			 }
		 }
		 //最后交换
		 $temp=$arr1[$i];
		 $arr1[$i]=$arr1[$minIndex];
		 $arr1[$minIndex]=$temp;
	}
}


selectSort($arr1);
var_dump($arr1);


//插入排序法******************

function insertSort(&$arr2){
		//默认下标为0，这个数己经是有序
	for($i=1;$i<count($arr2);$i++){
	// $insertVal是准备插入的数
	  $insertVal=$arr2[$i];
	  //准备先和$insertIndex比较
	  $insertIndex=$i-1;
	  
	  //如果条件满足，说明我们还没有找到适当的位置
	while($insertIndex>=0&&$insertVal<$arr2[$insertIndex]){
	
	//同时把数后移
	
	$arr2[$insertIndex+1]=$arr2[$insertIndex];
    	$insertIndex--;
	}
	//插入(这时就给$insertVal找到适当位置)
	$arr2[$insertIndex+1]=$insertVal;
	
	}
}

$arr2=array(0,5,-1,2,0.5,3.1);

insertSort($arr2);
var_dump($arr2);











?>
















</body>
</html>