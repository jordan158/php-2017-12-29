<?php

require_once "SqlHelper.class.php";
header("Content-type: text/html;charset=utf-8");

//创建SqlHelper对象

$sqlHelper=new SqlHerlper();
/*
$sql="insert into user1 (name,password,email,age) value('小红帽',md5('123456'),'xiaomao@gamil.com',80)";

//通过sqlhelper对象实例完成添加
$res=$sqlHelper->execute_dml($sql);

if($res==0){
	echo "失败";
}else{
	if($res==1){
		echo "恭喜，成功！";
	}else{
		echo "没有行受到影响";
	}
}
//$res->free();

$sql="delete from user1 where id=33";
$res=$sqlHelper->execute_dml($sql);
if($res==1){
	echo "删除成功";
}else{
	if($res==0){
		echo "删除失败";
	}else{
		echo "要删除的数据不存在";
	}
}
	

	

*/

//查询语句

$sql="select * from user1";
$res=$sqlHelper->execute_dql($sql);
while($row=$res->fetch_row()){
	foreach($row as $key=>$val){
		echo "--$val";
	}
	echo "<br/>";
}
//关闭资源
//释放内存
$res->free();












?>