<?php

/**
 *
 * 根据日期创建文件夹
 *
 */
function mkdir_by_date($path) {
	$path = rtrim($path, '/') . '/';
	$year = date('Y');
	$month = date('m');
	$day = date('d');

	$folder_name = $path . $year . '-' . $month . '-' . $day;
	$result = false;
	if (!is_dir($folder_name)) {
		$result = mkdir($folder_name, 0777, true);
	}
	return ($result ? $folder_name : '');
}

$folder_path = mkdir_by_date('/Users/liujb/code/php-study');
echo $folder_path;
