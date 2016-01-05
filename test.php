<?php

date_default_timezone_set('Asia/Shanghai');

$a = '2015-11-16 08:58:02';
$b = '2015-11-16 11:01:02';

$aa = strtotime($a);
$bb = strtotime($b);

$tmparr = array($a);
$tmp = $aa;

do {
  $tmp += 3600;
  $tmparr[] = date('Y-m-d-H', $tmp);
} while (date("Y-m-d-H", $bb) != date("Y-m-d-H", $tmp));

echo json_encode($tmparr);