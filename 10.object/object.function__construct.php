<html>
<head>构造方法</head>
<body>
<p>
1.php面向对象编程-构造方法<br/>
1.1.构造方法没有返回值。创建新对象后，系统自动调用构造方法。<br/>
1.2.在php5中一个类可以同时有两种形式的构造方法。<br/>
__construct()和类名(),当两个同时存在的时候，优先调用__construct()这个方法。<br/>
1.3.一般使用__construct()这个构造方法。<br/>
<br/>
2.1.$this本质可以理解就是这个对象的地址。<br/>
2.2.哪个对象使用到$this,就是哪个对象地址。<br/>
2.3.$this不能在类外部使用。<br/>
<br/>
3.构造方法注意事项<br/>
3.1.默认构造方法public function __construct(){}<br/>
3.2.一旦自定义了一个构造方法，默认的构造函数就被覆盖了，<br/>
这时在创建对象的时候就要使用自定义构造函数。<br/>
3.3.一个类只能有一个函数函数。(不能重载)<br/>

</p>



<?php
//构造方法快速入门

class Person{
	public $name;
	public $age;
	//1.这个是构造方法,php5独有
	public function __construct($iname,$iage){
		$this->name=$iname;
		$this->age=$iage;
		echo "我是构造方法";
	}
	
	public function showInfo(){
		echo "<br>名字是".$this->name."<br/>";
	}
	/*
	//2.构造方法，php4中的构造方法 名字和类名一致
	public function Person(){
		echo "<br/>我是php4中的构造方法.";
	}
	*/
	
}
$p1=new Person("张清",90);//输出我是构造方法。
/*
构造方法没有返回值，它是自动调用
*/
$p1->showInfo();

$p2=new Person("宋江",33);
 
$p2->showInfo();


/*
$p2=new Person();这样调用会报错
因为类自定义了构造方法，该类的默认构造方法被覆盖。
 __construct($iname,$iage)，调用时需要传二个参数。
*/

?>
</body>
</html>