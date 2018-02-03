<html>
<head></head>
<body>
<h3>一.批量执行dml语句</h3>
基本语法：<br/>
$sql="sql1;sql2;...";<br/>
mysqli::multi_query($sql);<br/>
说明：批量执行dml语句可以混合使用delete insert update,<br/>
但是最好不要使用select语句<br/>
<h3>二.批量执行dql语句</h3>
作用是可以一次性的取回多个结果集<br/>

</body>

<?php

//一.dml语句案例**********************************
/*
//1.得到mysqli对象
$mysqli=new mysqli("192.168.126.132","root","123456","test");
if($mysqli->connect_error){
die($mysqli->connect_error);
}

$sqls="insert into user (name,password,email,age) values ('张三',md5('123456'),'zs@gmail.com',30);";
$sqls.="insert into user (name,password,email,age) values ('李四',md5('123456'),'ls@gmail.com',40);";
$sqls.="insert into user (name,password,email,age) values ('王五',md5('123456'),'wu@gmail.com',50);";
//$sqls.="update ;";
//$sqls.="delete ;";
$b=$mysqli->multi_query($sqls);
if(!$b){
	echo "执行失败".$mysqli->error;
}else{
	echo "ok";
}


//关闭资源
$mysqli->close();
*/

//二.dql语句案例**********************************


//1.得到mysqli对象

$mysqli=new mysqli("192.168.126.132","root","123456","test");


//2.批量查询

$sqls="select * from user;";
$sqls.="select * from user1;";
$sqls.="desc user;";
$sqls.="desc user1";

//3.处理结果
//如果成功，则至少有一个结果集
if($res=$mysqli->multi_query($sqls)){
	do{
		//从mysqli连接取出第一个结果集
		$result=$mysqli->store_result();
		//显示mysqli result对象
		while($row=$result->fetch_row()){
			foreach($row as $key => $val){
				echo "--$val";
			}
			echo "<br/>";
		}
		//及时释放result
		 $result -> free ();
		 
		 if(!$mysqli->more_results()){
			 break;
		 }
		 
		echo "<br/>*********新的结果集*********<br/>";
		
	}while( $mysqli->next_result());
}


//关闭资源
$mysqli->close();
















?>
</html>