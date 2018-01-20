<html>
<head>静态变量(类变量)和静态方法(类方法)</head>
<body>
<p>
1.静态变量：所有的对象都共享一个变量->静态变量<br/>
2.静态变量的基本用法：<br/>
2.1.在类中定义静态变量：[访问修饰符]static $变量名;<br/>
<br/>
2.2.如何访问静态变量：<br/>
2.2.1.在类内部访问两种方法 self::$静态变量名 和 类名::$静态变量名。<br/>
2.2.2.在类外部访问一种方法 类名::$静态变量名<br/>
</p>

<?php
/*
问题:有一群人在玩堆雪人，不时有新的小孩加入，请问如何知道现在共有多少人在玩？
请使用面向对象的思想，编写程序解决。
思路：
1.使用全局变量：
什么是全局变量，在程序中，都可以使用的变量称为全局变量。


2.使用静态变量(类变量)
*/
//1.全局变量**************************

global $a;
//给全局变量赋值
$a=9;
function test1(){
	global $a;
	$a=90;

}
//调用函数
test1();
echo $a."<br/>";

//*************************************
global $global_nums;
$global_nums=0;

class Child{
	public $name;
	
	function __construct($name){
		$this->name=$name;
	}
	
	public function join_game(){
		global $global_nums;
		
		$global_nums+=1;
		
		echo $this->name."加入堆雪人游戏<br/>";
	}
}

//创建三个小孩

$child1=new Child('小明');
$child1->join_game();
$child2=new Child('小张');
$child2->join_game();
$child3=new Child('小红');
$child3->join_game();


//有多少人玩堆雪人
echo $global_nums."个人在玩堆雪人游戏";


//2.静态变量（类变量）******************************

class Child1{
	public $name;
	//定义并初始化一个静态变量。
	public static $nums=0;
	
	function __construct($name){
		$this->name=$name;
	}
	
	public function join_game(){

		//self::$nums使用静态变量
		self::$nums+=1;
		
		echo $this->name."加入堆雪人游戏<br/>";
	}
}

//创建三个小孩

$child1=new Child1('小明');
$child1->join_game();
$child2=new Child1('小张');
$child2->join_game();
$child3=new Child1('小红');
$child3->join_game();


//有多少人玩堆雪人
echo Child1::$nums;



//3练习题***********************************

class Person2{
	public static $a=90;
}
echo "<br/>".Person2::$a;//输出90

//静态变量与对象无关，可以直接访问。



class Person3{
	public static $a=900;
	public function __construct(){
		//$this->a=45;错误写法
		echo "<br/>".self::$a."--".Person3::$a;
	}
}
echo Person3::$a;
$p1=new Person3();
















?>

</body>
</html>