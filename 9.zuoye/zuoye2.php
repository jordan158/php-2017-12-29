<?php
//裁判打分
$arr=array(5,80,90,100);
//如果只想知道最低分和最高是多少，则可以直接排序。

/*
如果希望返回多个值;
$arr1=array();
*/

//找出给出最低分的裁判
	//该函数可以返回给出最低分的裁判的下标
	function findMin(&$arr){
	//假设第一个就是给出最低分的裁判
	$minFen=$arr[0];
	$minIndex=0;
	  for($i=1;$i<count($arr);$i++){
		  //如果以下条件成立，说明$i截判给出的成更低。
		  if($minFen>$arr[$i]){
			  $minFen=$arr[$i];
			  $minIndex=$i;
		  }
		  
		  }
		  return $minIndex;
	}
	
	
	function findMax(&$arr){
//假设第一个就是给出最高分的裁判
$maxFen=$arr[0];
$maxIndex=0;
  for($i=1;$i<count($arr);$i++){
	  //如果以下条件成立，说明$i截判给出的成更高。
	  if($maxFen<$arr[$i]){
		  $maxFen=$arr[$i];
		  $maxIndex=$i;
	  }
	  
	  }
	  return $maxIndex;
}
	
	$minIndex=findMin($arr);
	echo "下标为".$minIndex."给的分数最低,给的分数是".$arr[$minIndex];
	
	$maxIndex=findMax($arr);
	echo "<br/>下标为".$maxIndex."给的分数最高,给的分数是".$arr[$maxIndex];
	
	//计算平均成绩，去掉最高分和最低分
	
	$sum2=0;
	for($i=0;$i<count($arr);$i++){
		if($i!=$minIndex && $i !=$maxIndex){
			$sum2+=$arr[$i];
		}
	}
	echo "<br/>平均分为".$sum2/(count($arr)-2);
?>