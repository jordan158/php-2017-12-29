<html>
<head></head>
<body>
<h3> 一.全局变量</h3>
1.在整个作用域（这个php文件），都是可见的。<br/>
2.如果希望使用到全局$a,则这样定义globa $a<br/>
变量区分大小写<br/>
<h3>二.超全全局变量（数组）</h3>
1.超全局变量除了有全局变量的特点外，可以无须声明，直接使用<br/>
2.提供超全局数组的原因是为了让程序员更快捷的写出php程序。<br/>
3.php提供了几种：<br/>
3.1.$_GET（超链接和表单以GET提交）<br/>
3.1.1.接收超链接<br/>
3.1.2.表单以GET方式提交的数据<br/>
<br/>
3.1.3.超链接默认是GET提交，提交表单建议尽量使用POST，不要使用GET.<br/>
3.1.4.empty()和isset()判断是否收到值。<br/>
3.1.5.绝对不要启用register_globals,要关闭<br/>
<br/>
3.2.$_POST（以POST提交的表单）<br/>
3.2.1.通过Http POST方式提交的数据，会被封装到$_post数组中。<br/>
3.2.2.POST提交和GET提交区别（前都安全性更高，数据传输大[浏览器限制]，GET可以收藏到收藏夹）<br/>
<br/>
3.3.$_REQUEST（定义:可以包括$_GET/POST/$_COOKIE数组的信息）<br/>
3.3.1.不建议经常使用$_REQUEST<br/>
3.3.2.如果不确定_GET/POST,可以这样写，代码如下：<br/>
if($_SERVER['REQUEST_METHOD']=="POST"){<br/>
    echo $_POST['名字']; <br/>
}else if($_SERVER['REQUEST_METHOD']=="GET"){<br/>
    //用_GET接收<br/>
}<br/>
<br/>

3.4.$_SERVER(客户端浏览器信息和服务端本身信息。)<br/>
<br/>
3.5.$_ENV(该全局数组可以获取环境变量，在php5.3中默认禁用，在php.ini中可以启用，一般不启用)<br/>
<br/>
3.6.$_FILE<br/>
3.7.$_COOKIE<br/>
3.8.$_SESSION<br/>
3.9.$GLOBALS<br/>
3.9.1.包含了全部变量的全局组合组，变量的名字就是数组的键名<br/>
3.9.2.同时一个自定义的全局变量，也会自动的被$_GLOBALS管理。<br/>
3.9.3.当你定义一个全局变量，该变量也会被$GLOBALS管理<br/>


<?php 
//全局变量***************
$a=23;
function test(){   
    //如果希望使用到全局$a
    global $a;
    $a=45;
  }
test();
echo $a;

//超全局变量********
$_SERVER['hsp']="韩顺平";
echo "<pre>";
echo print_r($_SERVER);
echo "</pre>";














?>
</body>
</html>