<?php

/*
结论：
1.break语句默认跳出一层。
2.break语句后面带的数字，不能超过实际可以跳出的循环层数，否则会报错。
*/
for($i=0;$i<13;$i++){
	
	echo '$i='.$i."<br/>";
	if($i==3){
		break;
	}
}
//输出$i=3;

$i=0;
while(++$i){
	switch($i){
	  case 5:
		echo "quit at 5<br/>";
		break;
		
	  case 10:
	    echo "quit at 10<br/>";
		break 2;//break到while外边
		
	  default:
	     break; //break到switch外边
	}
}
echo '$i='.$i;//输出$i=10



?>