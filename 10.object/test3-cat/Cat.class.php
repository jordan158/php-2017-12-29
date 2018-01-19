<?php

//类名 首字母大写，使用驼峰法 MyCat
class Cat{
    //成员方法1.计算
	public function jisuan($num1,$num2,$oper){
		if($oper=="+"){
			$res=$num1+$num2;
		}else if($oper=="-"){
			$res=$num1-$num2;
		}else if($oper=="*"){
			$res=$num1*$num2;
		}else if($oper=="/"){
			$res=$num1/$num2;
		}
		return $res;
	}
	
	
	//计算圆形
	public function jisuanyuan($radius){
		return 3.14*$radius*$radius;
	}
}



?>