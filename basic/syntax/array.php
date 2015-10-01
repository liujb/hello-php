<?php
$arr1 = array('name' => 'liujb', 'age' => '23');
$arr2 = array('name' => 'liujiangbei', 'age' => '23');

$arr1 = 0;
if (empty($arr1)) {
  echo 'fuck you';
} 
else {
  echo 'fuck me';
}

$names = array('jiangbei', 'shabi');
echo count($names) . ' ';

for ($i = 0; $i < count($names); $i++) {
  echo $names[$i] . ' ';
}

foreach ($names as $item) {
  echo $item . ' ';
}

$prices = array('book' => 12, 'bread' => 21);
foreach ($prices as $key => $val) {
  echo $key . ' <=> ' . $val . '<br/>';
}

