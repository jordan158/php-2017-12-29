<html>
<head>静态方法(类方法)</head>

<body>
<p>
1.静态方法：<br/>
需求，当我们操作静态变量的时候，我们可以考虑使用静态方法。<br/>
<br/>
2.静态方法的特点：<br/>
2.1.静态方法只能操作静态变量。<br/>
2.2.静态方法不能操作非静态变量。<br/>
2.3.普通成员方法，既可以操作非静态和静态变量，<br/>
<br/>
3.静态方法的访问：<br/>
3.1.类名::类方法名 <br/>
3.2.对象实例->类方法名<br/>


</p>

<?php
//1.静态方法入门案例。
class Student{
	public static $fee=0;
	public $name;
	//构造函数
	function __construct($name){
		$this->name=$name;
	}
	//入学
	public static function  enterSchool($ifeel){
		self::$fee+=$ifeel;
	}
	
	//获取总学费
	public static function getFee(){
		return self::$fee;
	}
}

//创建学生

$stu1=new Student("小倩");
//1.通过类名来调用静态方法
//Student::enterSchool(350);
$stu1-> enterSchool(350);
$stu2=new Student("小张");
$stu2->enterSchool(30);
echo "总学费=".Student::getFee();






















?>



</body>

</html>