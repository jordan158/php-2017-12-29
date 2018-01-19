<html>
<head>给一个函数传递基本数据类型</head>
<body>
<P>
1.给一个函数传递基本数据类型<br/>
1.1.在默认的情况下是传递的值，希望传入地址<br/>
function test(&$变量...){}<br/>
1.2.在php中，如果给一个函数传递的是数组，则默认情况下是传递值（相当于拷递新的值）
希望传入地址，function test(&$数组名...){}<br/>

</p>

<?php
//给一个函数传递基本数据类型*****************
$a=90;
$b=90.8;
$c=true;
$d="hello";

function test1($a,&$b,&$c,$d){
	$a=91;
    $b=91.8;
    $c=false;
    $d="beijing";
}

test1($a,$b,$c,$d);
echo $a."||".$b."||".$c."||".$d;


//****************************************
$a1=array(1,2,9,8);

$a2=array(59,62,69);

$arr=array($a1,$a2);
var_dump($arr);










?>

</body>
</html>