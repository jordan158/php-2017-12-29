<html>
<head>
<script language="javascript">
function check(){
	
       //document.write("oK");

var num1val=document.getElementById("num1").value;
var num2val=document.getElementById("num2").value;

if(isNaN(num1val) || isNaN(num2val)){
	window.alert("num1和num2必须是数");
	//如果返回false就不提交
	return false;
}
	
	
}

</script>
</head>
<body>
<form action="work.php" method="post" onsubmit="return check()">
第一个数:<input type="test" id="num1" name="num1"><br/>
第二个数:<input type="test" id="num2" name="num2"><br/>
运算符：
<select name="oper">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<select>
<input type="submit" value="提交"/>
</form>



<?php



?>
</body>
</html>