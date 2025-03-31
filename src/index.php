<?php
require __DIR__ . '/../vendor/autoload.php';

use App\CSVClientsProvider;
use App\DataFilterByBirthday;
use App\Models\PHPDate;
use App\SendBirthdayGreetingsToUsersUseCase;

$fileName="datos.csv";
$dataReader=new CSVClientsProvider($fileName);
$clientListFiltered = new DataFilterByBirthday(new PHPDate((new DateTime())->format('Y-m-d')));

$useCase = new SendBirthdayGreetingsToUsersUseCase($dataReader, $clientListFiltered);
$useCase->execute();