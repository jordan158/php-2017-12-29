<?php
require_once 'jisuan.class.php';
if(isset($_REQUEST['num1'])){
	$num1=$_REQUEST['num1'];
}
if(isset($_REQUEST['num2'])){
	$num2=$_REQUEST['num2'];
}
$oper=$_REQUEST['oper'];
$cat1=new Cat();
echo $cat1->fouryusuan($num1,$num2,$oper);


?>