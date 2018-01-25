<?php
//对函数的说明
//参数说明$file_name 文件名
//$file_sub_dir:下载文件的子路径"/12.php-http/fileDown/"

function down_file($file_name,$file_sub_dir){
	/*
	header("Content-type:text/html;charset=utf-8");
	 //用以解决中文不能显示出来的问题
   // $file_name=iconv("utf-8","gb2312",$file_name);
	
	*/

//绝对路径
    $file_sub_path=$_SERVER['DOCUMENT_ROOT'].$file_sub_dir;
    $file_path=$file_sub_path.$file_name;
    //$file_path=iconv("utf-8","gb2312",$file_path);
   
//首先要判断给定的文件存在与否
if(!file_exists($file_path)){
	echo "该文件不存在";
	return;
}else{
	$fp=fopen($file_path,"r");
}
//获取下载文件的大小
$file_size=filesize($file_path);
if($file_size>10*1024*1024){
		echo "<script language='javascript'>window.alert('超过10M文件不能下载')</script>";
		return;
	}
	
	//下载文件需要用到的头
   //返回的文件
    Header("Content-type: application/octet-stream"); 
    //按照字节大小返回
	Header("Accept-Ranges: bytes"); 
    //返回文件大小
	Header("Accept-Length:".$file_size);
    //这里客户端的弹出对话框，对应的文件名	
    Header("Content-Disposition: attachment; filename=".$file_name);
	
	
	$buffer=1024;
	//为了下载的安全，我们最好做一个文件字节读取计数器。
	$file_count=0;
	 //向浏览器返回数据
		//这句话用于判断文件是否结束
	while(!feof($fp) && $file_count<$file_size){
		$file_data=fread($fp,$buffer);
		//统计读了多少个字节;
		$file_count+=$buffer;
	//把部份数据回送给浏览器;
		echo $file_data;
	}
	//关闭文件
	fclose($fp);
}
//测试函数是否可用
$file_sub_dir="/12.php-http/fileDown/";
$file_name=$_REQUEST['filename'];
down_file($file_name,$file_sub_dir);
?>