<?php
// Set default timezone
date_default_timezone_set('UTC');

echo time() . "\n";

$date = date('Y-m-d H:i:s', time());
echo $date;

echo gettype($date);
