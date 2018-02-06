<?php
//urlencode对字符串进行编码,urldecode解码
$str=urlencode("北京好");
echo "<a href='a.php?city=".$str."&name=xiaoming'>传输数据</a>";





















?>