<html>
<head>php数据库编程</head>
<h3>一.php有三种方式来操作我们的mysql数据库</h3>
1.mysql扩展库<br/>
2.mysqli扩展库<br/>
3.pdo<br/>

<h3>二.mysql扩展库和mysql数据库的区别</h3>
1.mysql数据库是用于存放数据。<br/>
2.mysql数据库的三层结构示意图<br/>
3.mysql扩展库是一堆函数，是php设计者提供给程序员用于完成对mysql数据库<br/>
的库的各种操作（CRUD）<br/>
4.细节<br/>
4.1.使用完$res结果后，一定要及时的释放资源<br/>
4.2.mysqli_close()如果没有的话，系统也自动的关闭。<br/>

<h3>三.程序中的$res用于代表sql语句的执行</h3>
1.如果执行的是dml语句，则返回bool<br/>
2.如果执行的是dql语句，则返回查询的结果<br/>
2.1.如何从mysql result取出查询的结果有如下方式：<br/>
2.1.1.mysqli_fetch_row,返回一个索引数组(键值不用字段表示)<br/>
2.1.2.mysqli_fetch_assoc,返回一个关联数组(健值用字段表示)。<br/>
2.1.3.mysqli_fetch_array,返回两套数组（包含索引和关联数组）<br/>
2.1.4.mysqli_fetch_object，把一行数据，当作一个对象返回。<br/>
3.对数据库进行增加，删除，修改，见案例2<br/>
<br/>
<h3>四.从上面的两个文件看出，代码的复用性和可维护性不高，<br/>
通常是将对数据库的操作，封装成一个工具类，Sqltool</h3>


<?php

//1，编写一个程序，这个程序从user1表中读取数据，并打印在网页中
/*
1.环境塔建：
1.1.启用mysql扩展库
在php.ini文件中去配置mysql扩展库
extension==php_mysql.dll
可以通过<?php phpinfo(); ?>查看当前php支持什么扩展库

（char（固定）和varchar（不固定）
1.2.创建一张用户表，供我们使用。
1.3.编写php程序完成对用户表的显示
*/



/*
mysql扩展库操作mysql数据库步骤连接:
1.获取连接
$conn=mysql_connect("127.0.0.1","root","123456");//php7之前
$conn=mysqli_connect("127.0.0.1","root","123456");//php7之后
2.选择数据库
3.设置操作编码（建议有）
4.发送指令sql(
ddl(1.数据定义语句),
dml(数据操作语句 update insert,delete),
dql(select),
dt(数据事物语句 rollback commit...))
5.接收返回的结果，并处理。
6.释放资源，关闭连接。
*/


//。一.查询数据库dql(select)********************************
//1.获取连接
$conn=new mysqli("192.168.126.131","root","123456","test");
if(!$conn){
	die("连接失败".mysqli_error());
}
//2.选择数据库


//3.设置操作编码（建议有）
$conn->query('set names utf8;'); 

//4.发送指令sql
$sql="select * from user1";
//$result 表示结果集，可以简单的理解就是一张表
$result = $conn->query($sql);

//var_dump($result);//mysql result资源类型


 
//5.接收返回的结果，并处理。
 $data=array();
    while ($tmp=mysqli_fetch_assoc($result)) {
		//echo "<br>";
        $data[]=$tmp;
/*
	foreach($tmp as $key => $val){
	  echo $key."=>".$val."&nbsp;";
     }
*/
    }
	//echo $tmp->email;(当返回一个对象时取其中属性)
  var_dump($data);


//6.释放资源，关闭连接。
mysqli_free_result($result);
//这句话可以没有，建议有
mysqli_close($conn);


//二.演示对user1表进行增，删除，修改的操作

$conn1=new mysqli("192.168.126.131","root","123456","test");
if(!$conn1){
	die("连接失败".mysqli_errno);
}
$conn1->query('set names utf8;'); 

//$sql="insert into user1 (name,password,email,age) value ('小张',md5('123456'),'xiaozhang@sohu.com',39)";
//$sql="delete from user1 where id=5";
$sql="update user1 set name='杨少天'  where id=6";

//如果是dml操作，则返回bool
$res=$conn1->query($sql);

if(!$res){
	echo "操作失败".mysql_errno;
}

//看看有几条数据
if($data=mysqli_affected_rows($conn1)>0){
	echo "操作成功,添加了".$data."行";
}else{
	echo "没有影响到行数";
}

mysqli_close($conn1);





?>

</html>
