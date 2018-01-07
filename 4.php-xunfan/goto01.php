<?php
goto a;
echo 'aa';
a:
echo 'bb';
echo '<br/>';
//*************************
for($i=0,$j=50;$i<100;$i++){
	while($j--){
		if($j==17) goto end;
	}
}
echo "i=$i";
end:
echo 'j=17'.$i."||".$j;

//$i=0,$j=17

?>