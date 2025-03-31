<?php
require __DIR__ . '/../vendor/autoload.php';

use App\CSVClientsProvider;
use App\DataFilterByBirthday;

$fileName="datos.csv";
$dataReader=new CSVClientsProvider($fileName);

$data=$dataReader->getData();

$clientListFiltered = new DataFilterByBirthday(new \App\Models\FakeDate());
print_r($clientListFiltered->filter($data));