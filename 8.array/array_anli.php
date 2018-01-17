<html>
<head>
<title>数组运算和练习</title>
</head>
<body>
<h1>请输入5个小孩的成绩，用空格隔开</h1>
<?php
//接收用户提交的学生的成绩;
$grades1=$_REQUEST['grade'];
//echo 'grade='.$grades;
//拆分，对成绩进行分割 
$grades=explode(" ",$grades1);
$allGrades=0;
//遍历
foreach($grades as $k=>$v){
	
	$allGrades+=$v;//隐藏转换string->float
	//echo "$k=$v<br/>";
}


?>


<form action="array_anli.php" method="post">
<input type="text" name="grade" value="<?php echo $grades1;?>"/>
<input type="submit" value="开始统计"/>
</form>

<?php
echo "平均时间是=".$allGrades/count($grades);

?>





</body>
</html>