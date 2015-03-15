<?php
  require('mysql_class.php');
  $db->update('user','name="allen2"','where id="3"');
  $db->dbClose()
?>