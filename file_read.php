<?php
$file_name = 'for-test-read-file.log';

/**
 * [read_file description]
 * @param  [type] $file_name [description]
 * @return [type]            [description]
 */
function read_file($file_name) {
	if (!file_exists($file_name)) {
		exit("File not exists.");
	}
	$stream = fopen($file_name, 'r');
	echo gettype($stream) . "\r\n";

	while (!feof($stream)) {
		echo fgets($stream);
	}
	fclose($stream);
}

// call function
read_file($file_name);
