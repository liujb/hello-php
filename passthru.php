<?php

/**
 * void passthru (string command [, int return_var])
 * passthru()只调用命令，不返回任何结果，但把命令的运行结果原样地直接输出到标准输出设备上
 */

$res;
// passthru("ls -l", $res);
passthru("python ~/Dropbox/Code/hello-py/basic/string.py", $res);

// echo $res;