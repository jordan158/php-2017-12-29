<html>
<head></head>
<body>
<h3>添加新闻</h3>
<form action="addnew.php" method="post">
<table>
<tr><th>新闻的标签:</th><th><input type="test" name="title"/></th></tr>
<tr><th>新闻的内容:</th><th><input type="test" name="content"/></th></tr>
<tr><th>新闻的时间:</th><th><input type="test" name="date"/></th></tr>
</table>
<input type="submit" value="提交">
</form>
<a href="work.php">返回首页面</a><br/>

<?php
require_once "SqlHelper.class.php";
if($_POST['title']&&$_POST['content']&&$_POST['date']){
	$title=$_POST['title'];
	$content=$_POST['content'];
	$date=$_POST['date'];
}else{
	echo "新闻的标签或内容或时间，请重新填写";
	return;
}

$sql="insert into news(title,content,date) value('$title','$content','$date')";

$addnews=new SqlHerlper();
$res=$addnews->execute_dml($sql);
if($res==0){
	echo "失败";
}else{
	if($res==1){
		echo "恭喜，成功！";
	}else{
		echo "没有行受到影响";
	}
}
$addnews->mysqli->close();
$res->free();









?>
</body>
</html>