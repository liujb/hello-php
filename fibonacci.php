<?php

/**
 * 递归得到fibonacci第n项的值
 * @param  [type] $num [description]
 * @return [type]      [description]
 */
function recursive($num) {
	if ($num <= 2) {
		return 1;
	} else {
		return recursive($num - 1) + recursive($num - 2);
	}
}

/**
 * 通过循环的方式得到fibonacci的第n项
 * @param  [type] $num [description]
 * @return [type]      [description]
 */
function looping($num) {
	$a = 0;
	$b = 1;
	$f = 1;
	for ($i = 2; $i <= $num; $i++) {
		$f = $a + $b;
		$a = $b;
		$b = $f;
	}
	return $f;
}

/**
 * 通过数组方式得到fibonacci的第n项
 * @param  [type] $num [description]
 * @return [type]      [description]
 */
function arrayFeature($num) {
	$arr = array(1, 1);
	if ($num <= 2) {
		return 1;
	}
	for ($i = 2; $i < $num; $i++) {
		$arr[$i] = $arr[$i - 1] + $arr[$i - 2];
	}
	return $arr[$num - 1];
}

function fibonacci($num, $handle) {
	$result = array();
	if (gettype($handle) != "function") {
		// return;
	}
	for ($i = 1; $i <= $num; $i++) {
		$result[] = $handle($i);
	}
	return $result;
}


$res = fibonacci(4, 'recursive');
$res = fibonacci(4, 'arrayFeature');
$res = fibonacci(4, 'looping');
echo json_encode($res);
