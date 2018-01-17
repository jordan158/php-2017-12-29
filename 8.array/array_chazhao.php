<html>
<head>
<title>查找</title>
</head>
<body>

<p>
1.顺序查找:<br/>
对某个数组，安装顺序，一个一个比较，然后找到你要的数据<br/>
2.二分查找(必须掌握)：<br/>
所谓二分查找，它有一个重要的前提，该数组本身己经是一个有序数组。<br/>
如果该数组不是有序的，则必须先排序再查找<br/>
(首先找到数组中间这个数，然后与要查找的数比较，如果，
要查找的数大于中间这个数，则说明应当向后找，否则向前找)


</p>
<?php


//顺序查找

$arr1=array(8,9,52,65,89);
function search(&$arr1,$findVal){
	$flag=false;
	for($i=0;$i<count($arr1);$i++){
		if($findVal==$arr1[$i]){
			echo "找到了，下标为$i";
			$flag=true;
			break; //找到一个就退出
		}
	}
	if(!$flag){
		echo "查找不到";
	}
}

search($arr1,0);

//二分查找

$arr2=array(2,8,19,52,56,800,1500);

function binarySearch(&$arr2,$findVal,$leftIndex,$rightIndex){
	
	if($rightIndex<$leftIndex){
		echo "找不到该数";
		return;
	}
	
	
	//找到中间这个数
	$middleIndex=round(($rightIndex+$leftIndex)/2);
	//找到中间这个数
	if($findVal>$arr2[$middleIndex]){
		binarySearch($arr2,$findVal,$middleIndex+1,$rightIndex);
	}
	
	else if($findVal<$arr2[$middleIndex]){
		binarySearch($arr2,$findVal,$leftIndex,$middleIndex-1);
	}else{
		echo "找到这个数 下标是 $middleIndex";
	}
}

binarySearch($arr2,52,0,count($arr2)-1);
































?>
</body>
</html>