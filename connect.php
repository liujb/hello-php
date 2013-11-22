<?php 
	$connect =new mysqli("localhost","root","liu!@#631959_","test"); 
	if(!$connect) {
		echo "Mysql Connect Error!"; 
	}else {
		echo "mysql success"; 
	}
	$connect->close();