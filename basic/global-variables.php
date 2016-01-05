<?php

$file = 42;
function meanningOfLife() {
  global $file;
  $file +=2;
  echo "Menning of the life is " . $file."\r\n";
}

meanningOfLife();
echo $file +"\r\n";
