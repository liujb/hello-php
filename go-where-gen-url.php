<?php

date_default_timezone_set('Asia/Shanghai');

$passengerId = 620322160640;
$driverId = 40043;
$startTime = strtotime("2015-12-30 14:00:00");
$endTime = strtotime("2015-12-30 14:20:00");

$driverUrl = "http://10.121.89.89:8081/getCoordis?userType=driver&userId=$driverId&startTime=$startTime&endTime=$endTime";
$passengerUrl = "http://10.121.89.89:8081/getCoordis?userType=passenger&userId=$passengerId&startTime=$startTime&endTime=$endTime";

echo "curl '". $driverUrl . "'\r\n";
echo "curl '". $passengerUrl . "'\r\n";

// curl 'http://localhost:8081'
// curl 'http://localhost:8081/getDevice?userType=1&userId=12323233322'
// curl 'http://localhost:8081/setDevice?os=19&networkType=WIFI&model=SM-N9009&phone=13000000001&ostype=2&devicetime=1451457055142&imei=A000004832C93B&appversion=2.9.10&maptype=soso&version_code=51&version=2816068880&token=mmwhkrb5on_Ws7d5AjgHjvpRbMZ2V6K39fHe4aH0cWFMjUsKwzAMRO8yay3ixm6pL1NELJqAEwdboZSQu1f9LKqNBt4wb8e2TQkRIHzC1Z8ItWRB7Ah8tx8Is-hYUkPcsXJrj1Kt6nxwfTj7SzgIQxVWuek0yz8xIDnbvuu73zlTDSMvi-SvN7GyPte38XgFAAD__w%3D%3D&complaint_version=1&datatype=2&uuid=4A01837B31E5DC5064FB5BFB6AC35698&apptype=2&sig=c286cae79ab755ee16d60305ccbbc1a08f691950'
// 
// curl 'http://localhost:8081/setDevice?appversion=2.9.9&channel=202&complaint_version=1&datatype=102&devicetime=1451466158.747701&imei=836999205c1bc3e735a4cf5bbd60e0df&maptype=soso&model=iPhone7%2C2&networkType=WIFI&os=9.2&ostype=1&phone=10100000002&sig=4932db422126875b290d5e9119b6d86451328b92&token=doiwlTX7wf005444628&version=673091392.0&userType=1&userId=121212'
// 

