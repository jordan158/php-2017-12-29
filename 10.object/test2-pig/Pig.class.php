<?php
class pig{
	//成员属性
	public $name;
	public $weight;
	public $color;
	public $age;
	
	//成员方法
	public function addWeight($a){
		//如果我们直接使用$weight，php会认为我们创建了一个新的变量
		$this->weight+=$a;
	}
	public function minusWeight($a){
		$this->weight-=$a;
	}
	public function printstar($n){
		//写出打印金出塔的代码
		
		for($i=1;$i<=$n;$i++){
			
			for($k=1;$k<=$n-$i;$k++){
				echo "&nbsp;";
			}
			
			
			for($j=1;$j<=$i*2-1;$j++){
				echo "*";
			}
			echo "<br/>";
		}
	}
	
}






?>