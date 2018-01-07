<html>
<head>
<title>猜拳游戏</title>
<script language="javascript">
 function mychange(obj){
	 var val=obj.value;
 //window.alert(val);
	var myimagg=document.getElementById("myimg");
	 if(val=="qt"){
		 myimagg.src="qt.jpg";
	 }else if(val=="jz"){
		 myimagg.src="jz.jpg";
	 }else if(val=="bu"){
		 myimagg.src="bu.jpg";
	 }
 }
</script>

</head>
你出拳：
<select name="you" onchange="mychange(this);">
<option value="qt">拳头</option>
<option value="jz">剪子</option>
<option value="bu">布</option>
</select>
<img src="???.jpg" id="myimg"/>
</html>