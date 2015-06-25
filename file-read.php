<?php
$file_name = './for-test-read-file.log';

// read file and return file size
// readfile($file_name);

$file_stream = fopen($file_name, 'r') or die('open file failed.');

// echo fread($file_stream, filesize($file_name));
fclose($file_stream);

$file_stream = fopen($file_name, 'r') or die('open file failed');

// echo fgets($file_stream);
while (!feof($file_steam)) {
	echo fgets($file_stream);
}
fclose($file_stream);
