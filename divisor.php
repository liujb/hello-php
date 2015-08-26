<?php

set_time_limit(0);

/**
 * 求约数
 * @param  [type] $num [description]
 * @return [type]      [description]
 */
function getDivisor($num)
{
    if ($num <= 0) {
        return false;
    }

    $result = array();
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $result[] = $i;
        }
    }
    return $result;
}

for ($i = 1; $i <= 9; $i++) {
    // echo $i . "\r\n";
    $num = pow(10, $i);
    $res = getDivisor($num);
    echo implode(", ", $res)
    echo array_sum($res) . "\r\n"; // implode(",", $res);
}
