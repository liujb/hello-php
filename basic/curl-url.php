<?php

// curl_init
// curl_setopt
// curl_exec
// curl_close
// curl_getinfo

$counter = 1;

for ($i = 0; $i < $counter; $i++) {
    $curl_obj = curl_init("http://www.baidu.com")
    // grab URL and pass it to the browser
    // curl_exec($curl_obj);

    $info = curl_getinfo($curl_obj);
  	echo json_encode($info);
    // echo 'look ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
}
