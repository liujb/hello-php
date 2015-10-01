<?php
require_once 'libs/csv-reader.php';

$exampleFile = "data/example.csv";
$driverFile = "data/driver.csv";

$csvReader = new CSVReader();

$example = $csvReader->Get($exampleFile);
$drivers = $csvReader->Get($driverFile, true);

echo json_encode($example);
// echo json_encode($drivers);
