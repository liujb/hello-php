<?php
header("Content-Type: text/xml");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->force_compile = 1;

$smarty->assign("root_attr", "< abc & def >");
$smarty->assign('elem_data', array("111", "222", "333"));

$smarty->display('demo_xml.tpl');

?>
