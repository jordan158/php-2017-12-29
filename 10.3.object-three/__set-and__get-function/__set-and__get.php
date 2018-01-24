<?php

class A{
	
	private $n1;
	private $n2;
	private $n3;
	
	//使用__set方法来管理所有的属性
	
	public function  __set($name,$val){
		$this->name=$val;
	}
	
	//使用__get方法可以获取所有的属性值
	public function __get($val){
		if(isset($val)){
			return $this->val;
		}else{
			return null;
		}
	}
}


$a1=new A();
echo $a1->n1="hello";
echo $a1->n2="work";










?>