<?php 

echo "<pre>";

echo print_r($_GET);
echo "</pre>";

//如果希望指定取出某出数据，则可以通过下标名来取

if(empty($_GET['city'])){
    echo "没有收到";
}else{
    echo "有city";
    echo $_GET['city'];
}




?>