<?php

/**
 * [$parentId description]
 * @var [type]
 */

$parentPid = getmypid();
echo 'current: ' . $parentPid . PHP_EOL;

$pid = pcntl_fork();
// 子进程本身来调用这个方法会返回0
// 子进程下一次执行的起点

echo 'child: ' . $pid . PHP_EOL;

if (-1 == $pid) {
	echo "Fork sub process failed.\r\n";
} else if (0 == $pid) {
	$mypid = getmypid();
	// 子进程本身的PID
	// 这个PID一定跟父进程调用pcntl_fork()返回的值一样
	echo "I am child. My PID: " . $mypid . " and my father's PID: " . $parentPid . PHP_EOL;
} else {
	echo "I am father. My children pid: " . $pid . " and mine: " . $parentPid . PHP_EOL;
}
