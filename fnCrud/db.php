<?php
	$host = 'localhost';
	$root = 'root';
	$password= 'liu!@#631959_';
	$database = 'test';

	$conn = mysql_connect($host,$root,$password);
	if(!$conn){
		die("connect failed".mysql_error());
	}else{
		echo "connected";
	}

	mysql_select_db($database,$conn);//use database
	mysql_query("set names utf-8");
?>