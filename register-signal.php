<?php

function signalHandler($signal)
{
    if ($signal == SIGINT) {
        echo "signal received" . PHP_EOL;
    }
}

// 注册信号和指定它的处理方法
pcntl_signal(SIGINT, 'signalHandler');

while (true) {
    sleep(1);

    // do somethings
    // for ($i = 0; $i < 100000000; $i++) {
    //     echo $i . PHP_EOL;
    //     usleep(100000);
    // }

    // 接受信号并调用其处理方法
    pcntl_signal_dispatch();
}
