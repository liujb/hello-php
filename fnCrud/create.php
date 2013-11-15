<?php 
	$host = 'localhost';
	$root = 'root';
	$password= 'liu!@#631959_';
	$database = 'test';

	$conn = mysql_connect($host,$root,$password);
	if(!$conn){
		die("connect failed".mysql_error());
	}else{
		echo "connected\n";
	}
	mysql_select_db($database,$conn);//use database
	mysql_query("set names utf-8");
	//应该将这段代码封装成类
	//CRUD操作都需要此段代码

	//插入操作
	$query = "insert into user(name,email) values('liujb','liujiangbei@126.com');";
	$result = mysql_query($query);
	if(!$result){
		echo "Error!";
	}else{
		echo "Success!";
		mysql_close($conn);
	}
?>