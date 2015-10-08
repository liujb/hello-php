<?php

date_default_timezone_set('Asia/Shanghai');

define('PHOTOS_PATH', '/Users/liujb/Dropbox/Camera Uploads/');

if (!is_dir(PHOTOS_PATH)) {
	return;
}

$handle = opendir(PHOTOS_PATH);
while (false !== ($file = readdir($handle))) {

	if ("." == $file || ".." == $file || ".dropbox" == $file || ".DS_Store" == $file) {
		continue;
	}

	$old_full_path = PHOTOS_PATH . $file;

	if (is_dir($old_full_path)) {
		continue;
	}

	if (!file_exists($old_full_path)) {
		continue;
	}

	// 获得文件最后修改时间
	$mtime = filemtime($old_full_path);
	$new_full_path = PHOTOS_PATH . date('Y-m', $mtime) . '/';

	if (!file_exists($new_full_path) || !is_dir($new_full_path)) {
		mkdir($new_full_path);
	}

	if (is_dir($new_full_path)) {

		echo $old_full_path . " => " . $new_full_path . $file . "\n";
		// continue;
		rename($old_full_path, $new_full_path . $file);
	}
}

closedir($handle);
