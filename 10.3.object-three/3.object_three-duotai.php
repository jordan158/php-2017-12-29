<html>
<head>面向对象编程-三大特性-多态（重载，重写(覆盖)）</head>
<body>
<p>
多态：<br/>
1.重载：基本概念，函数名一样，通过函数的参数个数域者参数类型不同，达到<br/>
调用一个函数名，但是可以区别不同的函数<br/>
2.php中如何通过魔术函数来实现方法重载的效果。<br/>
总结：<br/>
2.1.php5默认情况下不直接支持方法重载<br/>
2.2.php5可以用__call魔术方法，实现方法重载。<br/>
<br/>
<br/>
3.魔术方法:<br/>
3.1.__set和__get(访问类中protected和private属性)<br/>
3.2.__construct(构造函数，在创建对象后自动执行)<br/>
3.3.__destruct(析构函数，垃圾回收，在程序结束或被成为垃圾的时候执行)<br/>
3.4.__call(实现方法重载(调用相同的变量名))<br/>
4.魔术常量。<br/>
1.__LINE__ 文件中的当前行号。 <br/>
2.__FILE__文件的完整路径和文件名<br/>
3.__DIR__ 返回被包括的文件所在的目录<br/>
4.__FUNCTION__该函数被定义时的名字（区分大小写）。<br/>
5.__CLASS__ 返回该类被定义时的名字（区分大小写）<br/>
<br/>
<br/>
5.重写（父类和子类的函数名和参数个数一样）<br/>
5.1概念：子类有一个方法，和父类的某个方法的名称，参数个数完全一样，那么<br/>
   我们就说子类的方法就重写了父类的方法。<br/>
5.2.方法重写细节：<br/>
5.2.1.要实现重写，要求子类的那个方法的名字，参数列表和父类一模一样<br/>
      但是并不要求参数的名称一样。<br/>
5.2.2.如果子类要去调用父类的某个方法(public/protected)<br/>
可以使用：parent::方法名(参数...)，父类名::方法名(参数...);<br/>
5.2.3.在实现方法重写(覆盖)，访问修饰符可以不一样，<br/>
但是必须满足：子类的访问范围>=父类的访问范围<br/>
<br/>
<br/>
6.多态的体现：
当子类没有覆盖父类的方法，则调用父类方法。
当子类覆盖了父类的方法，则调用自己的方法。



</p>


<?php
//1.重载：********************************************
/*
class A{
	
	public function test1(){
		echo "test1";
	}
	public function test1($a){
		echo "test1 hello";
	}
}

$a=new A();
$a->test1();
$a->test1(50);

在php中，上面的这种用法是不对的。
*/

//2.php中如何通过魔术函数来实现方法重载的效果***********
class A{
	
	public function test1($p){
		echo "接收一个参数";
		echo "接收到的参数是";
		var_dump($p);
	}
	public function test2($p){
		echo "接收两个参数";
	    echo "接收到的参数是";
		var_dump($p);
	}
	//这些提供一个__call
	/*
	(__call是它一个对象调用某个方法，而该方法不存在
	系统会自动调用__call)
	*/
	//$method，$p变量名随意，$method->对象调用函数名，$p->参数(数据类型是数组)
	function __call($method,$p){
		//var_dump($p);
		if($method=="test"){
			if(count($p)==1){
				$this->test1($p);
			}else if(count($p)==2){
				$this->test2($p);
			}
		}
	}
}

$a=new A();
$a->test(33);
$a->test(1,2);



//2.重写***************************************

/*
当一个父类知道所有的子类都有一个方法，但是父类不能确定该方法
究竟如何写，可以让子类覆盖这个方法,具体用法如下

*/

//抽象类


 class Animal{
	 public $name;
	 protected $price;
	 
	 function cry(){
		 echo "不知道怎么叫";
	 }
	 
}
 
 class Dog extends Animal{
	 //覆盖
	 function cry(){
		 echo "小狗汪汪叫";
	 }
 }

 
 class Pig extends Animal{
	 //覆盖()
	 function cry(){
		 echo "小猪哼哼叫";
		 parent::cry();
	 }
 }

//创建一只狗
$dog1=new Dog();
$dog1->cry();
$pig1=new Pig();
$pig1->cry();





?>



</body>
</html>