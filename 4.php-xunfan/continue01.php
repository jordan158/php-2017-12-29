<?php

for($i=0;$i<13;$i++){
	
	if($i==10){
		continue ;
	}
	echo '$i='.$i."<br/>";
}
echo "hello".'<br/>$i='.$i;

echo "<br/>";
//********************


for($i=0;$i<2;$i++){
	for($j=1;$j<4;$j++){
		if($j==2){
			continue 2;
		}
		echo '$i='.$i.'$j='.$j."<br/>";
	}
}
?>