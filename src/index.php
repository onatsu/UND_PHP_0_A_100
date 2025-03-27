<?php
require __DIR__ . '/../vendor/autoload.php';

use App\CSVDataReader;

$fileName="datos.csv";
$dataReader=new CSVDataReader($fileName);

$data=$dataReader->getData();
print_r($data[0]);