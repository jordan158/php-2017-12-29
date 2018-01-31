<html>
<head></head>
<body>
<form action="selectnew.php" method="post">
请输入查询新闻关键字：<input type="text" name="chaxun">
 <input type="submit" value="查询">
</form>
<a href="work.php">返回首页面</a>
<?php
echo "<br/>";
require_once "SqlHelper.class.php";
if($_REQUEST['chaxun']){
	$chaxun=$_REQUEST['chaxun'];
}else{
	echo "查询的内容为空，请返回重新查询";
	return;
}
$sql="select * from news where title like '%".$chaxun."%'";

//echo $sql;
$sqlHelper=new SqlHerlper();
$res=$sqlHelper->execute_dql($sql);
	//获取返回总行数和列数
	echo "<br/>";
    echo "共有：".$res->num_rows."行；共有：".$res->field_count."列。";
//获取表头---从$res取出
 echo "<table border=1><tr>";
 
 //$res->fetch_field()从结果集中取得信息作为对象返回
 //$field->name列名
 while($field=$res->fetch_field()){
	//var_dump($field);
   echo "<th>{$field->name}</th>";
 }
 echo "<th><a href="deletenews.php">删除新闻</a></th>";
 echo "</tr>";

//循环取出数据
 //fetch_row() 函数从结果集中取得一行作为数字数组。
 while($row=$res->fetch_row()){
  echo "<tr>";
  foreach($row as $value){
   echo "<td>$value</td>";
}
echo "<td><a href="deletenews.php">删除新闻</a></td>";
  echo "</tr>";
 }
 echo "</table>"; 
//关闭资源
//释放内存
$res->free();






?>
</body>
</html>