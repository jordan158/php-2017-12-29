<html>
<head></head>
<body>

<h3>一.mysqli扩展库 预处理机制mysqli stmt</h3>
1.问题的提出?<br/>
现在需要向mysql数据库添加100个用户，请问如何实现。<br/>
<br/>
思路：<br/>
1.使用for循环100次，向数据库中添加100个用户。<br/>
2.使用批量添加.<br/>
3.方案3()<br/>
3.1.使用预编译技术，可以防止sql注入。<br/>


<?php

//预编译演示
/*
//1.创建mysqli对象

$mysqli=new mysqli("192.168.126.132","root","123456","test");

//2.创建预编译译对象
$sql="insert into user (name,password,email,age) values(?,?,?,?)";
$mysqli_stmt=$mysqli->prepare($sql);

if(!$mysqli_stmt){
	die($mysqli->error);
}

//3.绑定参数
$name="小倩";
$password="123456";
$email="xiaoqian@gmail.com";
$age="200";

//参数绑定->给?赋值,这里类型和顺序要对应。

$mysqli_stmt->bind_param("sssi",$name,$password,$email,$age);


//执行

$b=$mysqli_stmt->execute();

//继续添加
$name="老妖";
$password="123456";
$email="laoyao@gmail.com";
$age="200";
$mysqli_stmt->bind_param("sssi",$name,$password,$email,$age);
$b=$mysqli_stmt->execute();

$name="采臣";
$password="123456";
$email="caige@gmail.com";
$age="30";
$mysqli_stmt->bind_param("sssi",$name,$password,$email,$age);
$b=$mysqli_stmt->execute();





if(!$b){
	die("操作失败".$mysqli_stmt->error);
}else{
	echo "操作ok";
}
//释放
$mysqli->close();
*/


//使用预处理的方法，查询所有id>2的用户，的id,name,email
$mysqli=new mysqli("192.168.126.132","root","123456","test");

if(mysqli_connect_errno()){
    die(mysqli_connect_errno());
}

//创建一个预定义的对象?占位
$sql="select id,name,email from user1 where id>?";
$mysqli_stmt=$mysqli->prepare($sql);
$id=1;
//绑定参数
$mysqli_stmt->bind_param("i", $id);
//绑定结果集
$mysqli_stmt->bind_result($id,$name,$email);

//执行
$b=$mysqli_stmt->execute();
//取出绑定的值
while($mysqli_stmt->fetch()){
    echo "<br/>--$id--$name--$email";
}




echo "<br/>**************执行下一条查询语句";
$id=2;
//绑定参数
$mysqli_stmt->bind_param("i", $id);

//执行
$b=$mysqli_stmt->execute();



//取出绑定的值
while($mysqli_stmt->fetch()){
    echo "<br/>--$id--$name--$email";
}
//释放资源
$mysqli_stmt->free_result();
//关闭预编译
$mysqli_stmt->close();
//关闭连接
$mysqli->close();













?>
















</body>
</html>
