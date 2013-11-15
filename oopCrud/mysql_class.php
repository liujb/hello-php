<?php

class Mysql {
    
    private $host;//服务器地址
    private $root;//用户名
    private $password;//密码
    private $database;//数据库名

    //通过构造函数初始化类
    function __construct($host,$root,$password,$database){
        $this->host = $host;
        $this->root = $root;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    function connect(){
    	$this->conn = mysql_connect($this->host,$this->root,$this->password) or die("DB Connection Error!".mysql_error());
    	mysql_select_db($this->database,$this->conn);
    	mysql_query("set names utf8");
    }

    function dbClose(){
    	mysql_close($this->conn);
    }

    function query($sql){
    	return mysql_query($sql);
    }

    function myArray($result){
    	return mysql_fetch_array($result);
    }

    function rows($result){
    	return mysql_num_rows($result);
    }

    function select($tabName,$condition){
    	return $this->query("select * from $tabName $condition");
    }

    function insert($tabName,$fields,$values){
    	$this->query("insert into $tabName $fields values $values");
    }

    function update($tabName,$change,$condition){
    	return $this->query("update $tabName set $change $condition");
    }

}	

$db = new Mysql('localhost','root','liu!@#631959_','test');

