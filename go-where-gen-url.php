<?php

date_default_timezone_set('Asia/Shanghai');


$passengerId = 2964423;
$driverId = 3241148;
$startTime = strtotime("2015-07-02 14:00:01");
$endTime =  strtotime("2015-07-02 14:16:01");

$driverUrl = "http://10.231.135.214:8081/getCoordis?userType=driver&userId=$driverId&startTime=$startTime&endTime=$endTime";
$passengerUrl = "http://10.231.135.214:8081/getCoordis?userType=passenger&userId=$passengerId&startTime=$startTime&endTime=$endTime";

echo $driverUrl."\r\n";
echo "$passengerUrl";
