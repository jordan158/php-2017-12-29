<html>
<head>
<title>数组运算和练习</title>
</head>
<body>
<p>
1.$a + $b 联合 $a 和 $b 的联合。 <br/>
2.$a == $b 相等 如果 $a 和 $b 具有相同的键／值对则为 TRUE。  <br/>
3.$a === $b 全等 如果 $a 和 $b 具有相同的键／值对并且顺序和类型都相同则为 TRUE。  <br/>
4.$a != $b 不等 如果 $a 不等于 $b 则为 TRUE。  <br/>
5.$a <> $b 不等 如果 $a 不等于 $b 则为 TRUE。  <br/>
6.$a !== $b 不全等 如果 $a 不全等于 $b 则为 TRUE。  <br/>

</p>


<?php
//$a+$b;
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; //$b数组的键和值加到$a。 
echo "\$a+ \$b result<br/>";
var_dump($c);

$c = $b + $a; // 
echo "\$b+ \$a result<br/>";
var_dump($c);








?>



</body>
</html>