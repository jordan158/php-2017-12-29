<?php
//接收用户提交的学生的成绩;
$grades=$_REQUEST['grade'];
//echo 'grade='.$grades;
//拆分，对成绩进行分割 
$grades=explode(" ",$grades);
$allGrades=0;
//遍历
foreach($grades as $k=>$v){
	
	$allGrades+=$v;
	echo "$k=$v<br/>";
}

echo "平均时间是=".$allGrades/count($grades);
?>