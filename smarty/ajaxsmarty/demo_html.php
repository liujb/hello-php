<?php
header("Cache-Control: no-cache");
header("Pragma: no-cache");

require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->force_compile = 1;

$edit_mode = @($_REQUEST['edit_mode'] == "true");
$smarty->assign("edit_mode", !$edit_mode);

$ajax_request = @($_SERVER["HTTP_AJAX_REQUEST"] == "true");
$smarty->display($ajax_request ? 'demo_form.tpl' : 'demo_page.tpl');

?>
