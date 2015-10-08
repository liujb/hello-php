<?php

date_default_timezone_set('Asia/Shanghai');

$passengerId = 893387345920;
$driverId = 8900187;
$startTime = strtotime("2015-09-02 11:00:00");
$endTime = strtotime("2015-09-02 11:32:59");

$driverUrl = "http://10.121.91.146:8081/getCoordis?userType=driver&userId=$driverId&startTime=$startTime&endTime=$endTime";
$passengerUrl = "http://10.121.91.146:8081/getCoordis?userType=passenger&userId=$passengerId&startTime=$startTime&endTime=$endTime";

echo $driverUrl . "\r\n";
echo $passengerUrl . "\r\n";
