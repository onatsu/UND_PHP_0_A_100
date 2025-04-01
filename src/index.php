<?php
require __DIR__ . '/../vendor/autoload.php';

use App\CSVClientsProvider;
use App\DataFilterByBirthday;
use App\Models\FakeDate;
use App\Models\PHPDate;
use App\MysqlClientsProvider;
use App\SendBirthdayGreetingsToUsersUseCase;
use PDO;

$dotenv = DotenvVault\DotenvVault::createImmutable(__DIR__.'/..');
$dotenv->safeLoad();

$connection="mysql:host={$_SERVER['HOST']};dbname={$_SERVER['DBNAME']}";

$pdo=new PDO($connection, $_SERVER['DBUSER'], $_SERVER['DBPWD']);
$dataReader=new MysqlClientsProvider($pdo);
//$clientListFiltered = new DataFilterByBirthday(new PHPDate((new DateTime())->format('Y-m-d')));
$clientListFiltered = new DataFilterByBirthday(new FakeDate());

$useCase = new SendBirthdayGreetingsToUsersUseCase($dataReader, $clientListFiltered);
$useCase->execute();