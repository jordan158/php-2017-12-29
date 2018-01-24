<html>
<head>面向对象编程-三大特性-继承</head>
<body>
<p>
面向对象编程-三大特性-继承<br/>
1.所谓继承就是一个子类通过extends 父类 把父类的(public/protected)属性和(public/protected)方法继承下来<br/>
2.继承的基本语法是：<br/>
class  类名 extends 父类名{<br/>
	//自己的属性和方法<br/>
}<br/>
3.继承的细节<br/> 
3.1.子类只继承父类的public和protected方法和属性<br/> 
3.2.一个类只能继承一个父类(直接继承)，<br/> 
如果希望继承多个类的属性和方法，则使用多层继承。<br/> 
3.3.当创建子类对象的时候，默认情况下，不会自动调用父类的构造方法<br/> 
3.4.如果希望去调用父类的构造方法，或者其它的方法(public,protected)<br/> 
可以这样处理：(了解就行)<br/> 
类名::方法名()  或  parent::__construct();<br/> 
3.5.当一个子类的方法和父类的方法完全一样(public,protected),<br/> 
我们称为方法的覆盖(方法重写)。<br/> 
</p>

<?php

//应用场景 开发一套学生管理系统
//小学生
class Pupil{
	public $name;
	protected $age;
	protected $grade;
	
	public function showInfo(){
		echo $this->name."||".$this->age;
	}
	
	public function testing(){
		echo "小学生考试";
	}
}

//研究生
class Graduate{
	public $name;
	protected $age;
	protected $grade;
	
	public function showInfo(){
		echo $this->name."||".$this->age;
	}
	
	public function testing(){
		echo "研学生考试";
	}
}

//继承方法***********************************
//父类


class Stu{
	public $name;
	protected $age;
	protected $grade;

	
	public function showInfo(){
		echo $this->name."||".$this->age;
	}
}

//子类1
class Pupil1 extends Stu{
		public function testing(){
		echo "小学生考试";
	}
}
//子类2
class Graduate2 extends Stu{
		public function testing(){
		echo "研学生考试";
	}
}

//创建学生
$stu1=new Pupil1();
$stu1->name="小明";
$stu1->showInfo();
$stu1->testing();
//创建一个研究生
$stu2=new Graduate2();
$stu2->name="老明";
$stu2->showInfo();
$stu2->testing();

echo "<br/>";
//********************************************************

//父类
class a1{
	
	public $name;
	public function __construct($name){
		echo "我是父类的构造方法<br/>";
		$this->name=$name;
	}
	
}

//子类1
class b1 extends a1{
	public function __construct(){
		echo "<br/>我是子类的构造方法<br/>";
		//调用父类的构造方法
		a1::__construct("乔丹");//一般用于初始化父类的构造方法
		//或parent::__construct("乔丹");
	}
}

$bb1=new  b1();
echo $bb1->name;



?>



</body>
</html>