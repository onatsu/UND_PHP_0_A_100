<?php

namespace App;

class FizzBuzzCalculator
{

    public function execute(array $numbers):array
    {
        $output=[];
        foreach ($numbers as $number)
        {
            if(($number % 15)==0)
            {
                $output[]=new \App\FizzBuzzResponse(true, $number, "FizzBuzz");
                continue;
            } 

            if(($number % 3)==0)
            {
                $output[]=new \App\FizzBuzzResponse(true, $number, "Fizz");
                continue;
            }

            if(($number % 5)==0)
            {
                $output[]=new \App\FizzBuzzResponse(true, $number, "Buzz");
                continue;
            }            

            $output[]=new \App\FizzBuzzResponse(false, $number);
        }
        return $output;
    }
}