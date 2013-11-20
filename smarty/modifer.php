<?php

require_once('./libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->assign("foo","hello");
$smarty->display("modifer.tpl");

?>