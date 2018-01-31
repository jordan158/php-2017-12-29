<html>
<head>
<title>mysqli扩展库</title>
</head>
<h3>一.mysql扩展库和mysqli扩展库的比较</h3>
1.mysqli的稳定性和安全性，效率有所提高。<br/>
2.mysqli支持面向对象编程，同时mysqli扩展库考虑到php老程序员，<br/>
同时也提供了面向过程的编程风格。<br/>
<br/>
<h3>二.在mysqli扩展中，也提供了四种方式来获取mysqli result结果集</h3>
1.mysqli_result::fetch_row(索引数组以1，2...作为数组下标)<br/>
2.mysqli_result::fetch_assoc（关联数组以列名作为下标）<br/>
3.mysqli_result::fetch_array（包含以上二种方式显示）<br/>
4.mysqli_result::fetch_object（对象方式返回）<br/>
5.推荐使用前两种方式<br/>
<br/>
<h3>三.释放资源(结果集)的三种方式</h3>
1.mysqli_result::free ( void )<br/>
2.mysqli_result::close ( void )<br/>
3.mysqli_result::free_result ( void )<br/>
面向过程 mysqli_free_result ( mysqli_result $result )<br/>
<br/>
<h3>四,关闭连接</h3>
1.面向对象风格<br/>
mysqli::close ( void )<br/>
2.过程化风格<br/>
mysqli_close ( mysqli $link )<br/>

<h3>五.mysql的sql语句的特别说明</h3>
1.如果操作的字段类型是string型，则要求我们要用单引号包括<br/>
2.如果操作的字段类型是数值型，则可以用'80'包括（尝试转换成数值型）<br/>


<?php


//一.快速入门*************************************
//编写一个函数，可以接受一个表名，然后把表的头和记录显示在网页


//面向对象的风格：

//1.创建myssqli对象
$mysqli=new mysqli('192.168.126.131','root','123456','test');
  //验证是否ok
if($mysqli->connect_error){
	die("连接失败".$mysqli->connect_error);
}
//2.操作数据库(发送sql)
$sql="select * from user1";
$res=$mysqli->query($sql);
//var_dump($res);
//3.处理结果
while($row=$res->fetch_row()){
	foreach($row as $key=>$val){
		echo "--$val";
	}
	echo "<br/>";
}
//4.关闭资源
//释放内存
$res->free();
$mysqli->close();
















?>

</html>