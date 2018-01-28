<?php
require_once '../SqlTool.class.php';
header("Content-type: text/html;charset=utf-8");


//接收type
if(isset($_POST['type'])){
	$type=$_POST['type'];
}else{
	echo "输入为空";
	echo "<a href='mainView.php'>返回重新查询</a>";
}


if($type=="search1"){

//接收英文单词
if(isset($_POST['enword'])){
	$en_word=$_POST['enword'];
}else{
	echo "输入为空";
	echo "<a href='mainView.php'>返回重新查询</a>";
}

//看看数据中有没有这么条记录


$sql="select chword from word where enword='$en_word' limit 0,1";
//设计表
//查询（面象对象）

$sqlTool=new SqlTool();
$res=$sqlTool->execute_dql($sql);
if($row=mysqli_fetch_assoc($res)){
	echo $en_word."对应的中文意思是--".$row['chword'];
}else{
	echo "查询没有这个词条";
	echo "<br/><a href='mainView.php'>返回重新查询</a>";
}
mysqli_free_result($res);

//************************************************************************
}else if($type=="search2"){
	
//接收中文单词
if(isset($_POST['chword'])){
	$ch_word=$_POST['chword'];
}else{
	echo "输入为空";
	echo "<a href='mainView.php'>返回重新查询</a>";
}
//echo $ch_word;

//模糊查询
$sql="select enword from word where chword like '%".$ch_word."%'";

//echo $sql;
//设计表
//查询（面象对象）

$sqlTool=new SqlTool();
$res=$sqlTool->execute_dql($sql);

if(mysqli_num_rows($res)!=0){
   while($row=mysqli_fetch_assoc($res)){
	  echo "<br/>".$ch_word."对应的英文意思是--".$row['enword'];
     }
}else{
	echo "查询没有这个词条";
}

echo "<br/><a href='mainView.php'>返回重新查询</a>";
mysqli_free_result($res);

}








?>