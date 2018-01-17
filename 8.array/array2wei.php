<html>
<head>
<title>二维数组</title>
</head>
<body>
<p>
1.多维数组.二维数组<br/>
二维数组的基本语法：<br/>
$arr=array(array(1,2,3),array(5,6,9));<br/>
$arr1[0]=array(1,0);<br/>
二维数组，地图...<br/>
二维数组在内存中存在的形式。<br/>

</p>


<?php
//二维数组案列1

$arr2=array(array(0,0,0,0,0,0,0),array(0,0,1,0,0,0),array(0,2,0,3,0,0),array(0,0,0,0,0,0));

//遍历二维数组
for($i=0;$i<count($arr2);$i++){
for($j=0;$j<count($arr2[$i]);$j++){
	 echo $arr2[$i][$j]."&nbsp;";
 }
 echo "<br/>";
}

var_dump($arr2);

//矩阵转置
for($i=0;$i<count($arr2[0]);$i++){
for($j=0;$j<count($arr2);$j++){
	 echo $arr2[$j][$i]."&nbsp;";
 }
 echo "<br/>";
}

var_dump($arr2);



?>
</body>
</html>