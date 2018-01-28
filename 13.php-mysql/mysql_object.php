<?php
require_once "SqlTool.class.php";

$sqlTool=new SqlTool();

//dml添加操作
//$sql="drop database test10";
//$sql="create database test10";
$sql="insert into user1 (name,password,email,age) value ('慢慢',md5('123456'),'xiaozhang@sohu.com',39)";
$res=$sqlTool->execute_dml($sql);
if($res==0){
	echo "失败";
}else if($res==1){
	echo "成功";
}else if($res==2){
	echo "行数没有变化";
}

/*
//dql查询操作
$sql="select * from user1";
$res=$sqlTool->execute_dql($sql);
$data=array();
while($row=mysqli_fetch_assoc($res)){
	$data[]=$row;
}
var_dump($data);
*/
?>