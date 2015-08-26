<?php

$counter = 200;

for ($i = 0; $i < $counter; $i++) {
    $ch = curl_init("http://10.242.167.11:8081/");

    curl_exec($ch);
    $info = curl_getinfo($ch);
    echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
    
    // sleep(1);
}
