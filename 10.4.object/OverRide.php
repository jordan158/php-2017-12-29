<html>
<head>面向对象编程-抽象类</head>
<body>
<p>
为什么设计抽象类这个技术：<br/>
1.在实际开发中，我们可能有这样一种类，是其它类的父类，<br/>
但是它本身并不需要实例化,主要用途用于让子类来继承，这样可以达到<br/>
代码复用。同时利用项目设计者，设计类。<br/>
<br/>
2.细节:<br/>
2.1.基本用法：<br/>
abstract class 类名{<br/>
	属性;<br/>
	方法;<br/>
}<br/>
2.2.如果一个类或一个方法被使用abstract来修饰，则该类是抽象类，<br/>
该类是抽象方法(抽象方法就不能有方法体)<br/>
<br/>
3.注意事项：<br/>
3.1.抽象类不能被实例化。<br/>
3.2.抽象类可以没有抽象方法，同时还可以有实现了的方法。<br/>
3.3.如果一个类中，只要有抽象方法，则该类必须声明为abstract.<br/>
3.4.如果B类继承了一个抽象类A,则要求B类实现从A类继承的所有抽象方法<br/>
</p>





<?php
//快速入门案例**********************************************
abstract class Animal{
	public $name;
	protected $age;
	//这个方法没有方法体，这个方法主要是为了子类去实现。
	abstract public function cry();
}

class Dog extends Animal{
	public function cry(){
		echo "abc";
	}
}
//创建一个子类实例
$cat1=new Dog;
$cat->cry();

//2.如果B类继承了一个抽象类A,则要求B类实现从A类继承的所有抽象方法


//如果一个类中，只要有抽象方法，则该类必须声明为abstract
abstract class A{
	abstract function test();
	
}

//B继承了A,B类要么自己抽象，或者实现A类继承的抽象方法
class B extends A{
	function test(){
		echo "我实现A类的test方法";
	}
}




?>

</body>
</html>