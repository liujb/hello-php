<?php
require_once 'libs/csv-reader.php';
// require_once ("libs/csv-reader.php");

$fileName = "data/example.csv";
$csvReader = new CSVReader();

$arr = $csvReader->Get($fileName);
echo (json_encode($arr));
