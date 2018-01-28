<?php

class SqlTool{
	private $conn;
	private $host="192.168.126.131";
	private $user="root";
	private $password="123456";
	private $mydb="worddb";
	
	
	function SqlTool(){
		$this->conn=mysqli_connect($this->host,$this->user,$this->password,$this->mydb);
		if(!$this->conn){
			die("连接数据库失败".mysql_error());
		}
		mysqli_query($this->conn,'set names utf8;');
	}
	//完成select查询任务
	function execute_dql($sql){
		$res=mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
	        return $res;
		}
	//完成update,delete,insert
    function execute_dml($sql){
		$b=mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
		echo "添加的id=".mysqli_insert_id($this->conn);
		if(!$b){
			return 0;
		}else{
			if(mysqli_affected_rows($this->conn)>0){
				return 1;//表示成功
			}else{
				return 2;//表示没有行数影响
			}
		}
	}
}


?>