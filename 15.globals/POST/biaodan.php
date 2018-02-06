<html>
<head>


</head>
<h1>用户注册</h1>
<form action="register.php" method="post">
用户名：<input type="text" name="username"/><br/>
密码：<input type="password" name="password"/><br/>
性别：<input type="radio" name="sex" value="女"/>女<input type="radio" name="sex" value="男"/>男
<br/>
你喜欢什么：
<input type="checkbox" name="hobby[]" value="tiaowu">跳舞
<input type="checkbox" name="hobby[]" value="tiaowu1">跳舞1
<input type="checkbox" name="hobby[]" value="tiaowu2">跳舞2
<br/>
你所在的城市：
<select name="difang">
<option value="sz">深圳</option>
<option value="tz">天台</option>
<option value="tz">天台</option>
</select>
<br/>
个人介绍：
<textarea rows="10" name="intro" cols="30">
</textarea>
<br/>
选择图片<input type="file" name="myphoto"/><br/>

<br/>
<input type="submit" value="提交数据"/>

</form>
</html>