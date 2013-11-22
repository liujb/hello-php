<?php
require_once('./libs/Smarty.class.php');
$smarty = new Smarty();
#$smarty->debugging = true;

$item = array("name"=>"ALLEN","age"=>23);
$list = array("1"=>$item,"2"=>$item);

$smarty->assign("list",$list);
$smarty->display('array.tpl');
?>