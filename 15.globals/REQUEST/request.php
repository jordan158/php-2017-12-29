<?php 
echo "<pre>";

echo var_dump($_REQUEST);

echo "</pre>";

//如何取出某个值

//$_REQUEST既可以接收get,请求数据，也可以接收post请求，cookie
//所以这个变量，比较不可以信，不建议使用，使用$_POST,$_GET
echo $_REQUEST['aa'];

//如果不确定get/post，代码如下

if($_SERVER['http-method']=="post"){
    echo $_POST['名字']; 
}else if($_SERVER['http-method']=="get"){
    //用_GET接收
}




?>