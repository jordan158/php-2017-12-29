<html>
<head>http协议</head>
<body>
<h3>一.http协议</h3>
<p>
1.http协议是建立在tcp/ip协议基础上。<br/>
2.我们的web开发数据的传输都是依赖于http协议<br/>
3.http协议全称是超文本传输协议<br/>
4.http1.0短连接，http1.1长连接。<br/>
5.
</p>
<h3>二.http协议-http请求</h3>
基本结构<br/>
请求行<br/>
消息头<br/>
消息体(实体内容)<br/>

<h3>三.在服务器端，我们可以通过$_SERVER来获取我们需要的信息</h3>
重要的有：<br/>
HTTP_HOST<br/>
REMOTE_ADDR 访问该页面的ip<br/>
DOCUMENT_ROOT 获取apache的主目录<br/>
DOCUMENT_URI 请求的资源<br/>

<h3>四.http请求有两种主要方式</h3>
get和post的区别有哪些<br/>
1.安全性 get请求的数据会显示在地址栏上，post请求的数据放在http协议的消息体<br/>
2.从可以提交数据的大小看<br/>
2.1.http协议本身并没有限制数据大小。<br/>
2.2.浏览器对get和post请求做限制，get请求数据2K+35,post请求没有限制<br/>
3.get请求可以更好的添加到收藏夹<br/>

<h3>五.http协议深度剖析②-http响应详解(302 304码运用)</h3>
1.(302码)header("Location: 新的页面");<br/>
细节：浏览器请求后服务器返回一个302码，并给出需访问页面的地址，浏览再向新页面发送请求<br/>
2.(404)一般就是该页面不存在<br/>
3.(304) 如果本地有缓存，服务器就返回304码<br/>
<h3>六.演示如何通过Http响应，控制浏览器间隔一定时间跳转</h3>
header("Refresh:3 ;url=http://www.baidu.com");<br/>
<h3>七.演示如何通过Http响应，控制页面缓存</h3>
1.默认情况下，浏览器会缓存页面。<br/>
禁用缓存案如下：<br/>
header("Expires: -1");<br/>
header("Cache-Control: no_cache");<br/>
header("Pragma: no_cache");<br/>
echo "hello@cache";<br/>
<h3>八.http文件下载</h3>
文件下载原理


<?php

var_dump($_SERVER);
echo "你的Ip是：".$_SERVER['REMOTE_ADDR'];
//跳转到一个警告页面
if($_SERVER['REMOTE_ADDR']=="192.168.126.1"){
         header("Location: err.php");
}
?>

</body>
</html>