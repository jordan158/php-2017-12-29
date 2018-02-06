<?php 
//看看如何接收

echo "<pre>";
echo print_r($_POST);
echo "</pre>";

//关心爱好
$name=$_POST['username'];
$pwd=$_POST['password'];

//如接收复选项接收的数据
$hobbies=$_POST['hobby'];

echo "个人信息如下:<br/>";
echo "$name--$pwd<br/>";

//print_r($hobbies);

echo "该人的爱好如下:<br/>";
foreach ($hobbies as $key=>$val){
    echo "$key=$val<br/>";
}

echo "所在的城市是：".$_POST['difang'];


echo "<br/>个人介绍如下：";
echo $_POST['intro'];








?>