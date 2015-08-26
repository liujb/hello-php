<?php

date_default_timezone_set('Asia/Shanghai');

$date = '2015-07-20';

echo strtotime($date . "00:00:00") . "\r\n";
echo strtotime($date . "23:59:59");
