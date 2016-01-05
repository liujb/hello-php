<?php

/**
 * 执行命令并将之行结果输出到标准输出器
 * 返回结果看起来好像是输出结果的最后一行
 * 执行状态
 * string system (string command [, int return_var])
 */
$res;
// $abc = system("ls -l", $res);
$abc = system("python ~/Dropbox/Code/hello-py/basic/string.py", $res);

echo "\r\n";
echo "status: " . $res . "\r\n";
echo "result: " . $abc;
