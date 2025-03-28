<?php
require __DIR__ . '/../vendor/autoload.php';

use App\CSVDataReader;
use App\DataFilterByBirthday;

$fileName="datos.csv";
$dataReader=new CSVDataReader($fileName);

$data=$dataReader->getData();

$clientListFiltered = new DataFilterByBirthday();
print_r($clientListFiltered->filter($data));
