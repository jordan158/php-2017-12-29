<?php

//使用类
require_once 'Pig.class.php';

$pig1=new pig();
$pig1->weight=100;
$pig1->addWeight(10);

echo "增加后猪的体重=".$pig1->weight;

echo "<br/>";

$pig1->printstar(6);

echo "<br/>";

?>