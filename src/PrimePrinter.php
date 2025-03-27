<?php
require __DIR__ ."/../vendor/autoload.php";
use App\PrimeSelector;

function saludo(int $number, bool $exclamation)
    {
        $holaMundo = "Hola Mundo ".$number;

        if ($exclamation) { 
            $holaMundo .= "!";
        }

        echo $holaMundo;
    }

//saludo(5, true);
//saludo(5, false);

$primeSelector = new PrimeSelector();

print_r($primeSelector->listNPrimes(4));