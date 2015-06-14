<?php
require('mysql_class.php');
#$sql = "insert into user (name email) values ('allen','allen@hotmail.com');";
#$db->query($sql);

$db->insert('user', '(name,email)', '("allen","allen@hotmail.com")');
$db->dbClose();
