<?php
require('mysql_class.php');

$sql = "delete from user where id=2;";
$db->query($sql);
$db->dbClose();
