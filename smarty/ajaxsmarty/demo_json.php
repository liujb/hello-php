<?php
header("Content-Type: application/json");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->force_compile = 1;

// To use <% and %> instead of { and } in your Smarty templates,
// uncomment the following lines and use demo_json2.tpl below
// $smarty->left_delimiter = '<%';
// $smarty->right_delimiter = '%>';

function json_modifier($value) {
    return json_encode($value);
}

function json_function($params, &$smarty) {
    return json_encode($params);
}

$smarty->register_modifier('json', 'json_modifier');
$smarty->register_function('json', 'json_function');

$smarty->assign('str', "a\"b\"c");
$smarty->assign('num', 123);
$smarty->assign('bool', false);
$smarty->assign('arr', array(1,2,3));

$smarty->display('demo_json.tpl');

?>

