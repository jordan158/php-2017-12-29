<html>
<head>面向对象编程-三大特性-封装</head>
<body>
<p>
面向对象编程-三大特性。<br/>
抽象（不属于三大特性）->研究问题的方法。<br/>
一.封装<br/>
1.php提供了三种访问控制修饰符<br/>
1.1.public 表示全局，可以在本类内部，类外部，子类中使用<br/>
1.2.protected 表示受到保护，可以在本类内部，子类中使用<br/>
1.3.private 表示私有，可能在本类中使用<br/>
<br/>
2.1.三个控制修饰符不仅可以作用于属性，也可以作用于方法<br/>
2.2.如果一个方法没有访问修饰符，则默认是public.<br/>
2.3.成员属性一定要指定访问修饰符。<br/>
2.4.方法之间可以互相调用，但是需要使用$this去掉用。<br/>

<br/>
3.如果想访问protected或者访问private变量，<br/>
3.1.可以把protected或private属性封装到一个公开的方法中。<br/>
3.2使用__set和__get方法(不推荐使用)<br/>



</p>

<?php

//1.封装入门案例 

class Person{
	public $name;
	protected $age;
	private $salary;
	
	function __construct($name,$age,$salary){
		$this->name=$name;
		$this->age=$age;
		$this->salary=$salary;
	}
	//成员方法
	function showInfo(){
	echo $this->name."||".$this->age."||".$this->salary."<br/>";
	}
	
	//我们可以通过方法来访问protected或private变量
	//需求1：获取这个人的薪人
	public function getSalary($user,$pass){
		if($user=="shunping" && $pass=="123"){
			return $this->salary;
		}else{
			return "sorry,你无权查看";
		}
	}
	//需求2:修改年龄;对输入的值，进行校验
	public function setAge($age){
		if($age>1 && $age<120){
		   $this->age=$age;
	       return $this->name."的年龄己修改成".$age;	 
		}else{
			return "年龄范围不对";
		}
	}
}

//创建一个人

$p1=new Person("小王",30,10000);
//查看孙悟空的工资
//echo $p1->salary;类外部不能直接访问private (私有)属性。

echo $p1->showInfo();

//查看工资(private)
echo $p1->getSalary(shunping,1231);

//修改年龄(protected)
echo "<br/>".$p1->setAge(20);





?>


</body>

</html>