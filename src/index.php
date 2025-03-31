<?php
require __DIR__ . '/../vendor/autoload.php';

use App\CSVDataReader;
use App\DataFilterByBirthday;
use App\Models\PHPDate;
use App\SendBirthdayGreetingsToUsersUseCase;

$fileName="datos.csv";
$dataReader=new CSVDataReader($fileName);
$clientListFiltered = new DataFilterByBirthday(new PHPDate((new DateTime())->format('Y-m-d')));

$useCase = new SendBirthdayGreetingsToUsersUseCase($dataReader, $clientListFiltered);
$useCase->execute();