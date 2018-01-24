<html>
<head>
<script language="javascript">
function selType(val){
	//window.alert("你有种"+val);
	if(val=='jisuan'){
		//显示计算的界面，同时隐藏矩形界面
		table1.style.display="block";
		table2.style.display="none";
	}else if(val=='area'){
		//显示矩形的界面，同时隐藏计算界面
		table1.style.display="none";
		table2.style.display="block";
	}
	
	

}


</script>




</head>
<body>
<h1>聪明猫</h1>
<form action="cat_work.php" method="post" >
<input type="radio" name="sel"  value="aa" onclick="selType('jisuan')">四则运算
<input type="radio" name="sel"  value="bb" onclick="selType('area')">计算矩形

<!--style="display:block"表示按区块显示-->
<table  id="table1" style="display:block">
<tr><td>请输入第一个数</td><td><input type="text" id="num1" name="num1"/></td></tr>
<tr><td>请输入第一个数</td><td><input type="text" id="num2" name="num2"/></td></tr>
<tr><td>请输入运算符号</td><td>
<select name="oper">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
 </td></tr>
<tr><td colspan="2"><input type="submit" value="四则运算"></td></tr>



</table>
<!--下面这个table我们用于显示矩形-->

<!--style="display:none"表示不显示-->
<table id="table2" style="display:none">
<tr><td>请输入长</td><td><input type="text" name="chang"/></td></tr>
<tr><td>请输入宽</td><td><input type="text" name="kuan"/></td></tr>
<tr><td colspan="2"><input type="submit" value="矩形计算"/><td></tr>

</table>

</form>