<?php
//打印金字塔一半****************
//外层的for循环控制层数
$n=3;
for($i=1;$i<=$n;$i++){
	//内层控制每层*的个数
	for($k=1;$k<=$i;$k++){
		echo "*";
	}
	echo "<br/>";
}

//打印空心金字塔

for($i=1;$i<=$n;$i++){
	//在打印*前，先打印空格
	for($k=1;$k<=$n-$i;$k++){	
		echo "&nbsp;";
	}
	//内层控制每*的个数
	for($j=1;$j<=$i*2-1;$j++){
		
	 if($i==1||$i==$n){//第一层和最后一层
		echo "*";
	  }else{
		 if($j==1||$j==$i*2-1){
			 echo "*";
		 }else{
			 echo "&nbsp;";
		 }
	 }
	 
	}
		echo "<br/>";
}

//空心金字塔













?>