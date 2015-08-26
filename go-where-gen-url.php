<?php

date_default_timezone_set('Asia/Shanghai');


$passengerId =27072534;
$driverId = 61130;
$startTime = strtotime("2015-08-11 07:00:00");
$endTime =  strtotime("2015-08-11 07:59:59");

$driverUrl = "http://10.121.91.146:8081/getCoordis?userType=driver&userId=$driverId&startTime=$startTime&endTime=$endTime";
$passengerUrl = "http://10.121.91.146:8081/getCoordis?userType=passenger&userId=$passengerId&startTime=$startTime&endTime=$endTime";

echo $driverUrl."\r\n";
echo "$passengerUrl";
