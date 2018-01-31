<?php


//1.得到mysqli连接

$mysqli=mysqli_connect('192.168.126.131','root','123456','test');


if(!$mysqli){
	die("连接失败".mysqli_connect_error($mysqli));
}

//2.向数据库发送sql语句（ddl,dml,dql......）
$sql="select * from user1";
$res=mysqli_query($mysqli,$sql);
var_dump($res);

//3.处理得到的结果
 //$field->name列名
 while($field=$res->fetch_field()){
	//var_dump($field);
   echo "--".$field->name;
 }
 echo "</tr>";



//循环取出$res中的数据
while($row=mysqli_fetch_assoc($res)){
	foreach($row as $key=>$val){
		echo "--$val";
	}
   echo "<br/>";
}


//4.关闭资源

mysqli_free_result($res);
mysqli_close($mysqli);




?>