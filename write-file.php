<?php

$file_name = 'for-test-write-file.log';
$file_stream = fopen($file_name, 'w');

$str = 'liujiangbei';

fwrite($file_stream, $str);
fclose($file_name);
