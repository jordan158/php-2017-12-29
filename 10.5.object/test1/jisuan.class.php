<?php
class Cat{
	

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

	
}
