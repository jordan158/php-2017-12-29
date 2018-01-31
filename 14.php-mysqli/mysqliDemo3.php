<?php

//面向对象风格
$mysqli=new mysqli('192.168.126.131','root','123456','test');

if($mysqli->connect_error){
	die("连接失败".$mysqli->connect_error);
}

//添加一条记录
$sql="insert into user1 (name,password,email,age) value('慢慢',md5('123456'),'xiaomao@gamil.com',18)";
//删除
//$sql="delete from user1 where id=25";
//update
//$sql="update user1 set age=50 where id=14";

$res=$mysqli->query($sql);

if(!$res){
	echo "操作失败".$mysqli->error;
}else{
	//检查有多少行记录影响
	// var_dump($mysqli->affected_rows);
	if($mysqli->affected_rows>0){
		echo "执行ok";
	}else{
		echo "没有行数受影响";
	}
}
//关闭连接
$mysqli->close();


?>