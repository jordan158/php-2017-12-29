<html>
<head>学生管理系统</head>
<body>
<h1>学生成绩管理mini系统</h1>
<form action="zuoye3.php" method="post">
请输入10个同学的成绩：<input type="text" name="chengji"/><br/>
请输入学生的学号0-9号：<input type="text" name="stuNo"/><br/>
<!--隐藏控制-->
<input type="hidden" name="doing" value="seaGrade"/>
<input type="submit" value="查询成绩"/>
</form><br/><br/>


<form action="zuoye3.php" method="post">
请输入学生的成绩：<input type="text" name="grade"/><br/>
<input type="hidden" name="doing" value="seastuNo"/>
<input type="submit" value="查询学生编号"/><br/>
</form><br/><br/>


<form action="zuoye3.php" method="post">
<input type="hidden" name="doing" value="stuState"/>
<input type="submit" value="查询学生各个分数阶段情况"/><br/>
</form><br/><br/>


<form action="zuoye3.php" method="post">
请学号0-9号删除学生成绩：<input type="text" name="stuNodel"/><br/>
<!--隐藏控制-->
<input type="hidden" name="doing" value="delGrade"/>
<input type="submit" value="删除学生成绩"/>
</form>


<?php

//输入学号，打印该学生成绩。
$arr=array(10,50,60,80,93,66,98,75,85,99,88,96);

//1.这是查询学生成绩的函数***********************************
function showStuGrade($arr,$stuNo){
	//查找
	return $arr[$stuNo];
}

//2.通过学生编号查询学生的编号函数******************************
function showstuNo(&$arr,$grade){
	$flag=false;
	for($i=0;$i<count($arr);$i++){
		if($grade==$arr[$i]){
			echo "<br/>学号为".$i."学生的成绩是：".$grade;
			$flag=true;
		}
	}
	if ($flag==false){
		echo "没有学生考这个成绩";
	}
}




//接收doing值，从而判断，该用户点击了哪个按妞

$doing=$_REQUEST['doing'];
//echo "$doing";
if($doing=="seaGrade"){
//接收学生的编号：
$stuNo=$_REQUEST["stuNo"];
echo "学生编号是".$stuNo."的成绩是:".showStuGrade($arr,$stuNo);

}else if($doing=="seastuNo"){
	//接收用户输入的成绩
	$grade=$_REQUEST['grade'];
	showstuNo($arr,$grade);
	
	
}else if($doing=="stuState"){
	//echo "希望看到学生的统计情况";
	$arr1=array(0,0,0,0,0);
	for($i=0;$i<count($arr);$i++){
		if($arr[$i]>=0 && $arr[$i]<=59){
			$arr1[0]+=1;
		}else if($arr[$i]>=60 && $arr[$i]<=69){
			$arr1[1]+=1;
		}else if($arr[$i]>=70 && $arr[$i]<=79){
			$arr1[2]+=1;
		}else if($arr[$i]>=80 && $arr[$i]<=89){
			$arr1[3]+=1;
		}else if($arr[$i]>=90 && $arr[$i]<=100){
			$arr1[4]+=1;
		}
	}
	echo "<br/>统计结果如下：<br/>0-59分的有".$arr1[0]."人<br>
	60-69分的有".$arr1[1]."人<br>
	70-79分的有".$arr1[2]."人<br>
	80-89分的有".$arr1[3]."人<br>
	90-100分的有".$arr1[4]."人<br>";
}else if($doing=="delGrade"){
	$stuNodel=$_REQUEST['stuNodel'];
	if($stuNodel>=0 && $stuNodel<count($arr)){
		unset($arr[$stuNodel]);
		echo "编号为".$stuNodel."的学生成绩己删除";
	var_dump($arr);

	}else {
		echo "输入的学生学号不存在";
	}
	
}
	


?>


</body>
</html>