<?php

//接收myinput.php提交的数据并处理。
$layer=$_REQUEST['layer'];
//oop(面向对象编程)




//调用对象
require_once 'jinzita.class.php';

$p1=new abc();
$p1->printstar($layer);














?>