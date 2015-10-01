<?php

// set timezone
date_default_timezone_set('Asia/Shanghai');

// get current time
echo time() . "\r\n";

// str to time
echo strtotime("2015-07-06 00:00:00") . "\r\n";

// get current datetime
$time = date("Y-m-d H:i:s", time());
echo gettype($time) . "\r\n"; // string

// 今天的时间戳范围
$today = date("Y-m-d", time());
$startTime = strtotime($today . "00:00:00");
$endTime = strtotime($today . "23:59:59");
echo "today: {$startTime} => {$endTime}" . "\r\n";

// mktime integer
$time = mktime(16, 59, 59, 3, 15, 2015);
echo gettype($time) . "\n";

// timestamp to date
$time = 1443628240;
echo date("Y/m/d H:i:s", $time) . "\r\n";
