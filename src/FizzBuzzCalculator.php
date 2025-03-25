<?php

namespace App;

class FizzBuzzCalculator
{

    public function execute(int $number ):FizzBuzzResponse
    {
        if($number == 3)
        {
            return new \App\FizzBuzzResponse(true, $number, "Fizz");
        }

        return new \App\FizzBuzzResponse(false, $number);
    }
}