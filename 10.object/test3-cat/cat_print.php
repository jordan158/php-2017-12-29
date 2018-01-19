<html>
<head></head>
<body>

<form action="cat_work.php" method="post">
<h1>四则运算</h1>
第一个数：<input type="text" name="num1"/><br/>
第一个数：<input type="text" name="num2"/><br/>
运算符：
<select name="oper">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<br/>
<!--这是里是一个隐藏域-->
<input type="hidden" name="doing" value="jisuan"/>
<input type="submit" value="开始计算"/>
</form>
<br/><br/>

<form action="cat_work.php" method="post">
<h1>计算圆形面积</h1>
输入一个数：<input type="text" name="radius"/><br/>
<br/>
<!--这是里是一个隐藏域-->
<input type="hidden" name="doing" value="yuan"/>

<input type="submit" value="开始计算面积"/>
</form>


</body>
</html>