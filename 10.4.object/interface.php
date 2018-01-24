<html>
<head>面向对象编程-接口</head>
<body>
<p>
<h3>一.接口</h3>
1.使用程序模拟现实情况<br/>
2.定义规范(方法/属性)<br/>
</p>
<p>
<h3>二.基本语法</h3>
1.接口的使用基本语法：<br/>

 interface 接口名{<br/>
	 //属性<br/>
	 //方法<br/>
 }<br/>
 2.接口的方法都不能有方法体;<br/>
 3.如何实现接口<br/>
 class 类名 implements 接口名1，接口2{<br/>
 }<br/>
 4.接口它的作用就是声明一些方法，供其它类来实现，接口还体现编程中我们<br/>
 希望的效果，高内聚低耦合的特点。<br/>

</p>
<p>
<h3>三.深入讨论</h3>
1.什么情况下可以考虑使用接口:<br/>
1.1.定规范。<br/>
1.2.定下规范，让别的程序员来实现。<br/>
1.3.当多个类，他们之间是平级的关系，他们都去会实现某个功能，<br/>
只是实现的方式不一样。<br/>
1.4.细节：<br/>
1.4.1.不能去实例化一个接口<br/>
1.4.2.接口中的所有方法，都不能有方法体<br/>
1.4.3.一个类可以去实现多个接口<br/>
语法：class 类名 implements 接口1,接口2｛<br/>
｝<br/>
1.4.4.接口中可以有属性，但必须为常量，并且是pulibc。<br/>
interface iUsb{<br/>
	const A=90;<br/>
}<br/>
echo iUsb::a;<br/>
<br/>
class B implements iUsb{<br/>
	public function aaa(){}<br/>
	接口::A;<br/>
}<br/>
1.4.5.接口的方法是public,不能是protected和private。<br/>
1.4.6.一个接口不能继承其它的类，但是可以继承别的接口。<br/>
<p>

<h3>接口-类</h3>
1.一个接口可以继承多个其它接口、<br/>
2.当一个类去实现某个接口，则必须把所有接口的方法都实现<br/>
</p>



</p>

<?php

interface iUsb{
	public function start();
	public function stop();
}
//编写相机类，让它去实现
//1.当一个灯实现了某个接口，则要求该类必须实现这个接口的所有方法
class Camera implements iUsb{
	
	public function start(){
		echo "相机开始工作";
	}
	public function stop(){
		echo "相机停止工作";
	}
	public function end1(){
		echo "测试";
	}
}

//手机类


class Phone implements iUsb{
	
	public function start(){
		echo "手机开始工作";
	}
	public function stop(){
		echo "手机停止工作";
	}
}

//如何使用

$cameral=new Camera();
$cameral->start();
$cameral->stop();
$cameral->end1();

$phone1=new Phone();
$phone1->start();
$phone1->stop();







?>
</body>
</html>