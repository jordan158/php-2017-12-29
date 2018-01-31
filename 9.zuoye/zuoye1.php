<html>
<head>
<title>作业</title>
</head>
<body>
<form action="zuoye1.php" method="post">
请输入的层数：<input type="text" name="layer"/><br/>
请选择形状：
<select name="shape">
<option value="a">矩形</option>
<option value="b">半金字塔</option>
<option value="c">金字塔</option>
</select><br/>
<input type="submit" value="打印"/>

</form>

<?php
//案列一******************************************************
//$n表示层数
 $n=$_REQUEST['layer'];
 //"a"->表示矩形 “b”->一半的金字塔 "c"->完整的金字塔
 $shape=$_REQUEST['shape'];
 $starNum=5;
 
//swtich
function printShape($n,$shape,$starNum){
	switch($shape){
	 case "a":
		for($i=1;$i<=$n;$i++){
			for($j=1;$j<=$starNum;$j++){
				echo "*";
			}
			//打完一层后，换行
			echo "<br/>";
		}
		break;
	 case "b":
	    for($i=1;$i<=$n;$i++){
			for($j=1;$j<=$i;$j++){
				echo "*";
			}
			echo "<br/>";
		}
		break;
	  case "c":
		break; 
	}
}
//调用
printShape($n,$shape,$starNum);
?>
</body>
</html>