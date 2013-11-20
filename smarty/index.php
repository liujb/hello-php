<?php

#define('SMARTY_DIR','./libs/')
require_once('./libs/Smarty.class.php');
//$smarty = new Smarty();


#require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

#$smarty->setTemplateDir('/web/www.example.com/guestbook/templates/');
#$smarty->setCompileDir('/web/www.example.com/guestbook/templates_c/');
#$smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
#$smarty->setCacheDir('/web/www.example.com/guestbook/cache/');

$myArray = array('no' => 10, 'label' => 'Peanuts');
$smarty->assign('foo',$myArray);
#$smarty->assign('name','Liujiangbei');

//** un-comment the following line to show the debug console
$smarty->debugging = true;

$smarty->display('mypage.tpl');
#$smarty->display('index.tpl');
#echo "install Smarty";
?>