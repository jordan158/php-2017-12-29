<html>
<head></head>
<body>

<h3>一.事务</h3>
1.事务用于保证数据的一致性，它是由一组相关的dml语句组成，该组的<br/>
dml语句要么全部成功，要么全部失败。如：网上转账就是典型的用事务<br/>
来处理用于保证数据的一致性。<br/>
2.使用事务完成下面的代码。<br/>
<h3>二.mysql控制台操作事务，回滚和保存点</h3>
1.1. start transaction;(开启一个事务)<br/>
1.2.rollback;(回到没修改之前)<br/>
<br/>
2.1.start transaction;(开启事务)<br/>
2.2.savepoint a;or savepoint b;(创建保存点a或b)<br/>
2.3.rollback to a或rollback to b(回滚到保存点a或b,只能回滚一个)<br/>
<br/>
3.1.有问题就rollback<br/>
3.2.没问题就commit,提交后就无法回滚了。<br/>
<br/>
4.事务的acid特性<br/>
原子性，一致性，隔离性，持久性<br/>


<?php

/*
1.有一张银行账号表
create table account
(id int primary key,
balance float);
2.现在有一段php程序，要完成把1号10元钱，转到2号中的账户上去。

*/

$mysqli=new mysqli("192.168.126.132","root","123456","test");
if($mysqli->connect_error){
	die($mysqli->connect_error);
}
//将提交设为falsem，默认不提交
$mysqli->autocommit(false);
//->savepoint a;会把当前情况记录下来

$sql1="update account set balance=balance-2 where id=1";
$sql2="update account1 set balance=balance+2 where id=2";

$b1=$mysqli->query($sql1);
$b2=$mysqli->query($sql2) ;



if($b1&&$b2){

	echo "成功";
	//提交
	$mysqli->commit();
}else{
	//回滚！	
	echo "失败,执行回滚操作".$mysqli->error;
	$mysqli->rollback();

}
$mysqli->close();

/*
这时，我们需要有一种方法来控制两句sql语句同时成功，或者同时失败

-》事务


*/













?>

</body>
</html>