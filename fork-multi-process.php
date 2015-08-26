<?php

$counter = 1;

$parentPid = getmypid();
//echo "current pid: " . $parentPid . PHP_EOL;

for ($i = 0; $i <= $counter; $i++) {

    // echo "hello" . PHP_EOL;

    $pid = pcntl_fork();
    // echo "child pid: " . $pid . PHP_EOL;

    if ($pid == -1) {
        echo 'fork failed.' . PHP_EOL;
    } else if ($pid == 0) {
        echo "I am child, my pid: " . getmypid() . " , parent pid:" . $parentPid . PHP_EOL;
    } else {
        // echo "I am father, my pid:" . $parentPid . " , child pid: " . $pid . PHP_EOL;
    }
}
