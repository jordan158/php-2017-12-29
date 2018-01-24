<html>
<head><h1>异常处理</h1></head>
<body>
<h3>三.php异常处理</h3>
1.基本语法：<br/>
try{<br/>
	//可能出现错误或是异常的代码<br/>
}catch(Exception $e){<br/>
	//异常处理<br/>
	//1.自己处理<br/>
	//2.自己不处理，将其抛出<br/>
}<br/>
2.怎么样可以去有效的控制多条可能出现在错误或异常的代码<br/>
3.异常处理注意事项：<br/>
3.1.这种方法，可以更有效的控制错误，所以在开发中大量的使用<br/>
3.2.当捕获到一个异常后，try()块里的后续代码不会再执行了。<br/>
3.3.如果有一个异常发生，但你没有catch捕获，则会提示一个uncaught Exception<br/>
3.4.当catch一个异常，可以处理，也可以不处理<br/>
3.5.可以自定义异常类。<br/>
3.6.使用多个catch代码块可以捕获不同种类的异常<br/>

<?php
//1.异常处理
try{
	addUser("shunping1");
	updateUser("xx");
	
}
//catch捕获 Exception是异常类（是php定义好一个类）
catch(Exception $e){
	echo "失败信息=".$e->getMessage();                 
}

function addUser($username){
	if($username=="shunping"){
		//添加成功
	}else{
		//添加失败，
		//抛出异常,可以理解成返回一个异常
		throw new Exception("添加失败");
	}
}


function updateUser($username){
	if($username=="xiaoming"){
		//修改成功
	}else{
		//修改失败，抛出异常
		throw new Exception("修改失败");
	}
}



//*2.案列2*********************************************
function checkNum($val){
	if($val>100){
		throw new Exception("输入值过大");
	}else{
		echo "输入值正常";
	}
}
try{
	checkNum(300);
}catch(Exception $e){
	echo $e->getMessage()."--".$e->getLine();
}



//3.案例****************************

//定义一个顶级异常处理器

function my_exception($e){
	echo "我是顶级异常处理".$e->getMessage();
}

//修改默认的项级异常处理函数（器）
set_exception_handler("my_exception");

function a1($val){
	if($val>100){
		throw new Exception("val>100");
	}
}




function a2($val){
	if($val=="hello"){
		throw new Exception("不要输入hello");
	}
}



try{
	a2("hello");
}catch(Exception $e){
	//获取
	//echo $e->getMessage();
	//可以继续抛出,这时将会启动php默认的异常处理器来处理
	//你可以自定义一个顶级异常处理。
	throw $e;
}



//案例4.自定义异常类*************************
class myException1 extends Exception{} 
class myException2 extends Exception{}
function A(){
	throw new myException1("a");
}

function B(){
	throw new myException1("b");
}

function c(){
	try{
		A();//抛出myException1
		B();//抛出myException2
	}catch(myException1 $e1){
		$e1->getMessage();
	}catch(myException2 $e2){
		$e2->getMessage();
	}
}

//案例5****************************
// 下面的代码并不会执行“ok”,原因是$i=8/0;并没有抛出异常。
//所以可以看出，能不能catch到异常，要取决于，有没有抛异常。
try{
	//$i=8/0;
	$fp=fopen("aaa.txt","r");
}catch(Exception $e){
	echo "ok";
	echo $e->getMessage();
}






?>


</body>
</html>