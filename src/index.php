<?php
require __DIR__ . '/../vendor/autoload.php';

use App\FizzBuzzCalculator;

$fizzBuzzCalculator=new FizzBuzzCalculator();
$numbers=[1,2,3,4,5];

print_r($fizzBuzzCalculator->execute($numbers));
