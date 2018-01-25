<?php
//没有防止
if(isset($_SERVER['HTTP_REFERER'])){

	//取出来
	//判断$_SERVER['HTTP_REFERER']是不是以http://phptest.me/12.php-http开始->函数
	
	if(strpos($_SERVER['HTTP_REFERER'],"http://phptest.me/12.php-http")===0){
		//这里要用===，类型也要相等，如果没找到strpos("abc","d")==0为true,strpos("abc","d")===0为false;
		echo strpos("http://phptest.me/1.php-yufa/a.html","http://phptest.me/12.php-http");
		echo "访问正常";
	
	}else{
		//跳转到一个警告页面
		echo "http://phptest.me/12.php-http目录以外的访问都不能连接";
	  
		//header("Location: err.php");
	}

	}else{
	   echo "没有HTTP_REFERER值非法访问";
	   //跳转到一个警告页面
		//header("Location: err.php");
	}



?>