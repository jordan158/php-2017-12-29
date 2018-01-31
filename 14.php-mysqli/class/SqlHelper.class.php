<?php



class SqlHerlper{
	private $mysqli;
	//以后这里要写死的数据信息，是需要配置到一个文件
	private static $host="192.168.126.131";
	private static $user="root";
	private static $pwd="123456";
	private static $db="test";
	
	public function __construct(){
		//完成初始化的任务
		$this->mysqli=new mysqli(self::$host,self::$user,self::$pwd,self::$db);
	  if($this->mysqli->connect_error){
		  die("连接失败".$this->mysqli->connect_error);
	  }
	  //设置访问数据库的字符集
	  //作用是保证php是以utf8方式来操作我们的数据库
	  $this->mysqli->query("set names utf8");
	}
	
	public function execute_dql($sql){
		$res=$this->mysqli->query($sql) or die("操作dql".$this->mysqli->error);
		return $res;
		$this->mysqli->close();
	}
	
	public function execute_dml($sql){
		$res=$this->mysqli->query($sql) or die("操作dml".$this->mysqli->error);
		
		if(!$res){
			return 0;//表示失败
		}else{
			if($this->mysqli->affected_rows>0){
				return 1;//表示成功
			}else{
				return 2;//表示没有行数受影响
			}
		}
	}
}









?>