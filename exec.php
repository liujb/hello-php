<?php

/**
 * 返回结果也是输出结果中最后一行
 * string exec (string command [, string array [, int return_var]])
 * @var array
 */
$st;
$arr = array();
// $res = exec("ls", $arr, $st);
$res = exec("python ~/Dropbox/Code/hello-py/basic/string.py", $arr, $st);

// echo json_encode($arr);
// var_dump($arr);

foreach ($arr as $key => $value) {
	echo $value . "\r\n";
}

echo "\r\n";
echo $res;
echo "\r\n";
echo $st;