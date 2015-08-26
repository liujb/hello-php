<?php

date_default_timezone_set('Asia/Shanghai');

define('PHOTOS_PATH', '/Users/liujb/Dropbox/Camera Uploads/');

if (!is_dir(PHOTOS_PATH)) {
    echo 'Not dir.';
    return;
}

$handle = opendir(PHOTOS_PATH);

while (false !== ($file = readdir($handle))) {
    if ($file == "." || $file == "..") {
        continue;
    }

    $old_full_path = PHOTOS_PATH . $file;
    if (!file_exists($old_full_path)) {
        echo 'file: ' . $old_full_path . ' not exists';
        continue;
    }

    echo $file . "\r\n";
    continue;
    // 获得文件最后修改时间
    // $mtime = filemtime($old_full_path);

    $dir_name = date('Y-m', $mtime);
    $new_full_path = PHOTOS_PATH . $dir_name . '/';

    if (!file_exists($new_full_path)) {
        mkdir($new_full_path);
    }

    if (is_dir($new_full_path)) {
        rename($old_full_path, $new_full_path . $file);
    }
}

closedir($handle);


