<?php


//编写一个函数，可以接受一个表名，然后把表的头和记录显示在网页


$mysqli=new mysqli("192.168.126.131","root","123456","test");
	if(!$mysqli){
		die($mysqli_error);
	}
	

function show_tab_info($mysqli,$table_name){
	
	$mysqli->query("set names utf8");
	$sql="select * from $table_name";
	$res=$mysqli->query($sql);
	var_dump($res);
	
	//获取返回总行数和列数
       echo "共有：".$res->num_rows."行；共有：".$res->field_count."列。";

//获取表头---从$res取出
 echo "<table border=1><tr>";
 
 //$res->fetch_field()从结果集中取得信息作为对象返回
 //$field->name列名
 while($field=$res->fetch_field()){
	//var_dump($field);
   echo "<th>{$field->name}</th>";
 }
 echo "</tr>";
 //循环取出数据
 //fetch_row() 函数从结果集中取得一行作为数字数组。
 while($row=$res->fetch_row()){
  echo "<tr>";
  foreach($row as $value){
   echo "<td>$value</td>";
}
  echo "</tr>";
 }
 echo "</table>"; 
 $res->free();
}
show_tab_info($mysqli,user1);
	
/*
	while($field_info=mysqli_fetch_field($res)){
		echo "<br/>".$field_info->name;
	}
	var_dump($field_info);
}

show_tab_info(user1);

*/





?>