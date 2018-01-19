<html>
<head>php面向对象编程</head>
<body>
<P>
1.类和对象的关系：<br/>
1.1.类是抽象的，概念的，代表一类事物，比如人类，猫类。<br/>
1.2.对象是具体的，实际的，代表一个具体事物。<br/>
1.3.类是对象的模板，对象是类的一个个体实例<br/>
<br/>
2.成员属性说明：<br/>
2.1.成员属性是从某个事物提取出来的，它可以是基本数据类型（整数，小数，字符串，布尔），<br/>
也可以是复合数据类型（数组，对象）<br/>
2.2.如何创建对象：<br/>
$对象名=new 类名();<br/>
$对象名=new 类名;<br/>
以上两种创建对象方法从效果上没有区别<br/>
2.3.访问某个对象的成员属性(其它成员属性是public):<br/>
$对象名->属性名;<br/>
<br/>
3.如果一个文件，专门用于定义类，则命名规范应当这样<br/>
类名.class.php.<br/>
<br/>
4.分析对象在内存中存在的形式。<br/>
4.1.如果给一个函数传递一个对象，实际上是传递一个地址。<br/>


</p>

<?php
//1.体验案例*************************************

//这个就是一个类(数据类型)
class cat{
	//成员属性
	public $name;
	public $age;
	public $color;
	}

//$cat1对象（通过一个cat类创建了一个cat1对象）
 $cat1=new cat();
 $cat1->name="小白";
 $cat1->age=3;
 $cat1->color="白色";
 $cat2=new cat();
 $cat2->name="小花";
 $cat2->age=30;
 $cat2->color="红色";
 
 //如果我们找到一只猫，只要找到$cat1,那么该变量所有相关的属性通通找到。
 $findcatname="小花";
 if($cat2->name==$findcatname){
    echo $cat2->name."||".$cat2->age."||".$cat2->color;	 
 }
echo "<br/>";

 //2.定义一个人类
 
 class Person{
	 public $name;
	 public $age;
 }
 $a=new person();
 $a->name="小明";
 $a->age=20;
 //把a变量（对象），赋给$b
 $b=$a;
 $b->age=680;
 echo $a->name."<br/>";//输出小明
 echo $b->name."<br/>";//输出小明
 echo $a->age."<br/>";//输出680
 echo $b->age."<br/>";//输出680
 
 
 
 //3.变量在内存中存放形式
 $a1=78;
 $b1=&$a1;
 $b1+=8;
 echo $a1."||".$b1;//输出二个86
 echo "<br/>";
 
 
 //4.如果给一个函数传递一个对象，实际上是传递一个地址。
 
 class Person1{
	 public $name;
	 public $age;
 }
 
 $p1=new Person1();
 $p1->name="韩顺平";
 $p1->age=28;
 
 //函数接收对象时候，传入的时候是地址。
 function test1($p){
	 $p->name="小明";
	 test2($p);
 }
 function test2($k){
	 $k->name="哈哈";
 }
 test1($p1);
 echo $p1->name;
 
 
 
 
 
 
 
 
 
 
 
 
 
?>


</body>
</html>