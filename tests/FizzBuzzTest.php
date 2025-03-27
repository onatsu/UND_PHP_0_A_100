<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\FizzBuzzCalculator;

class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function given_a_multiple_of_three__should_return_fizz()
    {
        //Arrange
        $fizzBuzzClass = new FizzBuzzCalculator();
        $multipleOfThree = [6];
        $expectedValue = [new \App\FizzBuzzResponse(true, 6, "Fizz")];

        //Act
        $response = $fizzBuzzClass->execute($multipleOfThree);

        //Assert
        $this->assertEquals($expectedValue, $response);
    }

    /** @test */
    public function given_a_zero__should_return_fizzbuzz()
    {
        //Arrange
        $fizzBuzzClass = new FizzBuzzCalculator();
        $multipleOfThree = [-15];
        $expectedValue = [new \App\FizzBuzzResponse(true, -15, "FizzBuzz")];

        //Act
        $response = $fizzBuzzClass->execute($multipleOfThree);

        //Assert
        $this->assertEquals($expectedValue, $response);
    }    

    /** @test */
    public function given_a_multiple_of_five__should_return_buzz()
    {
        //Arrange
        $fizzBuzzClass = new FizzBuzzCalculator();
        $multipleOfFive = [10];
        $expectedValue = [new \App\FizzBuzzResponse(true, 10, "Buzz")];

        //Act
        $response = $fizzBuzzClass->execute($multipleOfFive);

        //Assert
        $this->assertEquals($expectedValue, $response);
    }    


    /** @test */
    public function given_a_multiple_of_three_and_five__should_return_fizzbuzz()
    {
        //Arrange
        $fizzBuzzClass = new FizzBuzzCalculator();
        $multipleOfFive = [30];
        $expectedValue = [new \App\FizzBuzzResponse(true, 30, "FizzBuzz")];

        //Act
        $response = $fizzBuzzClass->execute($multipleOfFive);

        //Assert
        $this->assertEquals($expectedValue, $response);
    }       

    /** @test */
    public function given_a_non_multiple__should_return_the_number()
    {
        //Arrange
        $fizzBuzzClass = new FizzBuzzCalculator();
        $nonMultiple = [1];
        $expectedValue = [new \App\FizzBuzzResponse(false, 1)];

        //Act
        $response = $fizzBuzzClass->execute($nonMultiple);

        //Assert
        $this->assertEquals($expectedValue, $response);
    }

    /** @test */
    public function given_a_multiple_values__should_return_values()
    {
        //Arrange
        $fizzBuzzClass = new FizzBuzzCalculator();
        $multipleOfThree = [1,3];
        $expectedValue = [new \App\FizzBuzzResponse(false, 1), new \App\FizzBuzzResponse(true, 3, "Fizz")];

        //Act
        $response = $fizzBuzzClass->execute($multipleOfThree);

        //Assert
        $this->assertEquals($expectedValue, $response);
    }    

}

/**
 * 3 "Fizz"
 * 5 "Buzz"
 * 15 "FizzBuzz"
 * 1 1
 *
 * [1,2,3,4,5] [1,2,"Fizz",4,"Buzz"]
 */