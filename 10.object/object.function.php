<html>
<head>php面向对象编程-成员方法</head>
<body>
<P>
1.成员方法详解。<br/>
当我们把一个函数写到某个类中，则该函数可以称为成员方法。<br/>
2.成员方法的基本语法：<br/>
访问修饰符号 function 函数名(参数列表){
	//函数体<br/>
	//return 语句;<br/>
}<br/>
3.成员方法的细节：<br/>
3.1.在实际开发中，通常把类当独写成一个文件中，调用在其它文件中。<br/>


</p>

<?php
//1.成员方法体验案例********************

class Person{
	public $name;
	public $age;
	public function speak(){
		echo "我是一个好人";
	}
	public function count1(){
		$res=0;
		for($i=1;$i<=1000;$i++){
			$res+=$i;
		}
		//return 谁调用，就返回给谁。
		return $res;
	}
	
	public function count2($n){
		$res=0;
		for($i=0;$i<=$n;$i++){
			$res+=$i;
		}
		
		return $res;
	}
	public function add($num1,$num2){
		$res=$num1+$num2;
	   return $res;
	}
	//添加一个新的方法，可以判断三个数最大的数
	public function findMax($arr){
		//这里仍然可以写算法
		$maxVal=arr[0];
		$maxValIndex=0;

		for($i=1;$i<count($arr);$i++){
			if($maxVal<$arr[$i]){
				$maxVal=$arr[$i];
				$maxValIndex=$i;
		
			}
		}
		return $maxVal;
	
	}
	
	}

//创建一个对象
$p1=new Person();
//通过对象去访问，调用成员方法
//强调：调用成员方法和调用普通函数的机制不变。
$p1->speak();


//让这个人做算术题
echo '<br/>计算结果$res='.$p1->count1();

//接收一个，计算1..+n的值
echo '<br/>计算结果$res='.$p1->count2(10);

//计算二个数的和：
echo '<br/>两个数的和='.$p1->add(1,15);

//把三个数入到数组中
$myArr=array(3,90,-2,92);
echo "<br/>最大的数是=".$p1->findMax($myArr);




















?>

</body>
</html>