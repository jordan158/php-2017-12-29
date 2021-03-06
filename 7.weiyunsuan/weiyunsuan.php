<html>
<head>
<title>位运算符</title>
</head>
<body>
<p>
位运算符。<br/>
1.二进制：逢2进位的进位制(0,1)因为使用二进制只有0,1两个数，简单，<br/>
易于电子方式实现，同时，通过0,1组合可以表示任意一个数。<br/>
1.1.二进的最高位是符号：0表示正数，1表示负数。<br/>
1.2.正数的原码，反码，补码都一样。<br/>
(1使用二制表示(8个字节,以前是4个字节)
--->00000000 00000000 00000000 00000000 00000000 00000000 00000000 00000001)<br/>
1.3.负数的反码=它的原码符号位不变，其它位取反(0->1,1->0)<br/>
1.4.负数的补码=它的反码+1<br/>
1.5.0的反码，补码都是0<br/>
1.6.php没有无符号数，换言之，php中的数都是有符号的。<br/>
1.7.在计算机运算的时候，都是以补码的方式来运算的<br/>
(不管一个数是正数还是负数，都要被转成补码，然后进行运算)<br/>

举例：<br/>
-1<br/>
-1的原码：100000000 00000000 00000000 00000001<br/>
-1的反码：11111111 11111111 11111111 11111110<br/>
-1的补码: 11111111 11111111 11111111 11111111<br/>

<br/>

2.位运算一览表。<br/>
2.1.$a & $b And（按位与） 将把 $a 和 $b 中都为 1 的位设为 1。 
2.2.$a | $b Or（按位或） 将把 $a 或者 $b 中为 1 的位设为 1。 
2.3.$a ^ $b Xor（按位异或） 将把 $a 和 $b 中不同的位设为 1。 
2.4.~ $a Not（按位非） 将 $a 中为 0 的位设为 1，反之亦然。 
2.5.$a << $b Shift left（左移） 将 $a 中的位向左移动 $b 次（每一次移动都表示“乘以 2”）。 
2.6.$a >> $b Shift right（右移） 将 $a 中的位向右移动 $b 次（每一次移动都表示“除以 2”）。 
<br/>
3.位运算基本概念<br/>
3.1.php有4个位运算，分别是"按位与&,按位或|,按位异或^,按位取反~",<br/>
运算规则如下：<br/>
3.1.1.按位与&:两位全为1，结果为1.<br/>
3.1.2.按位或|:两位有一个为1，结果为1.<br/>
3.1.3.按位异或^:两位一个为0，一个为1，结果为1.<br/>
3.1.4.按位取反~：0->1,1->0<br/>
<br/>
3.2.php中有移位运算符：<br/>
3.2.1.>>,<<算术右移和算术左移，运算规则如下：
3.2.2 算术右移：低位溢出，符号位不变，并用符号位补溢出的高位。
3.2.3.算术左移：符号位不变，低位补0


</p>


<?php

//1.按位取反~********************
$a=~2;
echo $a;//输出-3
/*
原码：00000000 00000000 00000000 00000010
补码：00000000 00000000 00000000 00000010
取反后（补码）：11111111 11111111 11111111 11111101
取反后（反码）：11111111 11111111 11111111 11111100
取反后（原码）：10000000 00000000 00000000 00000011
*/
echo "<br/>";
//**************************************
$a=~-5;
echo $a;//输出4
/*
原码：10000000 00000000 00000000 00000101
反码：11111111 11111111 11111111 11111010
补码：11111111 11111111 11111111 11111011
取反后（补码）：00000000 00000000 00000000 00000100
取反后（原码）：00000000 00000000 00000000 00000100

*/
echo "<br/>";

//2.按位与&**************************************
$a=2&3;
echo $a;//输出2

echo "<br/>";

//3.按位或｜**************************************
$a=2|3;
echo $a;//输出3

echo "<br/>";

//4.按位异或^***********************************
$a=2^3;
echo $a;
echo "<br/>";

//5.位移运算***********************************


$a=1>>2;//输出0
/*
1的补码：00000000 00000000 00000000 00000001
算术右移2位：00000000 00000000 00000000 00000000
*/
echo $a;

echo "<br/>";

//***********************************************
$b=-1>>2;
echo $b;//输出-1;
/*
步骤-1的补码：
-1的原码：10000000 00000000 00000000 00000001
-1的反码：11111111 11111111 11111111 11111110
-1的补码：11111111 11111111 11111111 11111111
-1>>2:11111111 11111111 11111111 11111111
结果：
补码->原码
反码：11111111 11111111 11111111 11111110
原码：10000000 00000000 00000000 00000001
*/
echo "<br/>";


//*****************************************************

$c=1<<2;
echo $c;//向左移动二位，低位0补齐，输出4
echo "<br/>";


//************************************************
$d=-2<<4;
echo $d;//输出-32;
echo "<br/>";




?>
</body>
</html>