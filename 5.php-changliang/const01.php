<html>
<head>
<title>常量</title>
</head>
<body>
<P>
所谓常量，我们可以理解成就是特殊的变量：<br/>
1.定义常量前面不需要$;<br/>
2.常量一旦定义，则不能修改其值<br/>
3.常量在定义的时候，就需要赋值。<br/>
4.常量可以通过define或const<br/>
5.常量的名称，我们一般说是全部大写，然后用下划线间隔。<br/>
6.什么时候需要使用常量：在程序中我们不希望 某个值变化，<br/>
则使用常用，比如圆周率，税率....<br/>
<br/>
</p>
</body>
<?php
//常量定义第一种方法;
define("TAX_RATE",0.08);

echo TAX_RATE;


//第二种方法（php5.3以上）
const TAXRATE2=0.09;

echo '-'.TAXRATE2;
?>











</html>