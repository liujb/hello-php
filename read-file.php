<?php

$fileName = './for-test-read-file.log';
// read file and return file size
// readfile($fileName);

$fileStream = fopen($fileName, 'r') or die('open file failed.');
// echo fread($fileStream, filesize($fileName));
fclose($fileStream);

$fileStream = fopen($fileName, 'r') or die('open file failed');

// echo fgets($fileStream);
while (!feof($fileStream)) {
    echo fgets($fileStream);
}
fclose($fileStream);
