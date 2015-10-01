<?php
require_once './Read_csv.php';

$file_path = './data.csv';
$read_csv_obj = new Read_csv();

$ret = $read_csv_obj->read_file($file_path);

var_dump($ret);
// echo json_encode($ret);
