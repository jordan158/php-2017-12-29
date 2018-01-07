<?php
//九九乘法表
$n=9;
for($i=1;$i<=$n;$i++){
	for($k=1;$k<=$i;$k++){
		echo "$k*$i=".$k*$i;
		echo "&nbsp;";
	}
	echo "<br/>";
}



?>