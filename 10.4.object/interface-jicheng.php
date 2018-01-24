<html>
<head>面向对象编程-实现接口vs继承类</head>
<body>
<p>
<h3>一.实现接口vs继承类</h3>
1.继承和实现接口的比较：<br/>
1.2.可以认为实现接口是对单一继承的补充。<br/>
1.3.可以不破环类层级关系的前提下，对某个类功能扩展。<br/>
</p>
<h3>二.final关键字</h3>
1.如果我们希望某个类不被其它的类来继承(可能因为安全考虑)，可以使用final<br/>
(如果某个类有关键字final,又被其它类继承，则会报错。)<br/>
2.我们希望某个方法，不能被子类改写，可以使用final来修饰。<br/>
3.final关键字不能去修饰属性。<br/>
<br/>
<h3>三.常量</h3>
1.基本用法：const 常量名=值;<br/>
2.访问:  类名::常量名（内部：slef::常量名）;或 接口::常量名<br/>
3.常量名应全部大写，并且前面不要有$<br/>
4.常量在定义的时候，必须给初值，<br/>
5.const关键字前不能带有修饰符(public,protected,private),默认为公开的<br/>
<?php
//1.实现接口vs继承类*******************************************************
class Monkey{
	public $age;
	public $name;
	
	public function climbing(){
		echo "猴子会爬树";
	}
}

interface Birdable{
	public function fly();
}

interface iFishable{
	public function swimming();
}

class LittleMonkey extends Monkey implements Birdable,iFishable{
      public function fly(){
		  echo "猴子会飞";
	  }
	  public function swimming(){
		  echo "猴子会游泳";
	  }
}

$monkey1= new LittleMonkey();
$monkey1->climbing();
$monkey1->fly();
$monkey1->swimming();

//2final关键字****************************************

class A{
	final public function getRate($salary){
		return $salary*0.08;
	}
}

class B extends A{
	//不能覆盖父类的getRate方法。
	/*
	public function getRate($sal){
		return $sal*0.01;
	}
	*/
}
$b=new B();
echo $b->getRate(100);

//3.常量****************************************


class AA{
	/*
	1.常量在定义的时候，必须给初值，
	2.const关键字前不能带有修饰符(public,protected,private),默认为公开的
	*/
	const TAX_TATE=0.08;
	public function payTax($val){
		return $val*AA::TAX_TATE;
		//slef::TAX_TATE也是可以访问常量
	}
}

$a=new AA();
echo $a->payTax(200);












?>
</body>
</html>