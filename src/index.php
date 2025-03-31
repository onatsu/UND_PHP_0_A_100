<?php
require __DIR__ . '/../vendor/autoload.php';

use App\CSVDataReader;
use App\DataFilterByBirthday;
use App\Models\PHPDate;

$fileName="datos.csv";
$dataReader=new CSVDataReader($fileName);

$data=$dataReader->getData();

$clientListFiltered = new DataFilterByBirthday(new PHPDate(new DateTime()->format('Y-m-d')));
print_r($clientListFiltered->filter($data));
