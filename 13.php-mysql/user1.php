<?php

//创建一张表
create table user1(
id int primary key auto_increment,
name varchar(32) not null,
password varchar(64) not null,
email varchar(128) not null,
age tinyint unsigned not null
)

//对一张表插入数据
insert into user1(name,password,email,age)values('zs',md5('123456'),'zs@gmail.com',30);
insert into user1(name,password,email,age)values('ls',md5('123456'),'ls@gmail.com',30);
insert into user1(name,password,email,age)values('啊啊',md5('123456'),'lb@gmail.com',35);

show variables like 'char%';
//查看mysql中的编码类型




如何查看一个database，一个table的编码
1.查看database的编码，假如database名字为webpy：
show create database webpy;
2.查看一个table的编码，假如table名为entries2:
show create table entries2;











mysql> set  character_set_client=gbk;
Query OK, 0 rows affected (0.00 sec)

mysql> set  character_set_results=gbk;
Query OK, 0 rows affected (0.01 sec)







//添加到my.cnf中，重启数据库，之后建立的表都支持uft8
[client]
default-character-set=utf8


[mysqld]
default-storage-engine=INNODB
character-set-server=utf8
collation-server=utf8_general_ci







?>