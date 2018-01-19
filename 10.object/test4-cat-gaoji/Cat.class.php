<?php
class Cat{
	
	//四则运算
	public function fouryusuan($num1,$num2,$oper){
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
	
	
	//计算矩形
	public function juxing($chang,$kuan){
		$res1=$chang*$kuan*2;
		return $res1;
		
	}
	
}



?>