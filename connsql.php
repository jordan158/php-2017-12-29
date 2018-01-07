<?php

$conn=mysqli_connect("127.0.0.1","root","123456");
if($conn){
	echo "连接mysql数据库成功";
	
}else{
	echo "连接数据库失失败";
	
}


?>