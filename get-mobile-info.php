<?php

/**
 * 获取手机号归属地，接口不可用
 * @param $phone
 */
function getMobileInfo($phone)
{
    if (empty($phone)) {
        exit('Please input phone');
    }

    $response = file_get_contents('http://appyun.sinaapp.com/index.php?app=mobile&controller=index&action=api&outfmt=json&mobile="' . $phone . '"');
    $result = json_decode($response, true);

    exit(json_encode($result));
}

// Run the function
getMobileInfo('13269167341');