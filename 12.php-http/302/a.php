<?php
//这句话会向客户端发送一个302状态码，告诉浏览器重新访问b.php
header("Location: b.php");
?>