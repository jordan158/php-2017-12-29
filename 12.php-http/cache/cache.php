<?php
//通过header来禁用缓存 (ajax)
header("Expires: -1");
header("Cache-Control: no_cache");
header("Pragma: no_cache");
echo "hello@cache";
echo "<img src='11.jpg' width='100px'>";
?>