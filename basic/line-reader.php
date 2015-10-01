<?php

$files = array("licenseNumber" => "chepaihao_list.txt", "driverSerial" => "jianduka_list.txt", "msisdn" => "phones_list.txt");

foreach ($files as $k => $v) {
  $arr = array();
  $source = fopen($v, "r");

  while (!feof($source)) {
    $line = trim(fgets($source));
    if (empty($line)) {
      continue;
    }
    $arr[] = '"' . $line . '"';
  }
  $sql = 'select driverId from Driver where ' . $k . ' in (' . implode(",", $arr) . ");" . "\r\n";
  file_put_contents($k . ".sql", $sql);

}