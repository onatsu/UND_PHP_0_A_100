<?php

use App\FizzBuzzCalculator;

class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function given_a_multiple_of_three__should_return_fizz()
    {
        //Arrange
        $fizzBuzzClass = new FizzBuzzCalculator();
        $multipleOfThree = [3];
        $expectedValue = [new \App\FizzBuzzResponse(true, 3, "Fizz")];

        //Act
        $response = $fizzBuzzClass->execute($multipleOfThree);

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

}

/**
 * 3 "Fizz"
 * 5 "Buzz"
 * 15 "FizzBuzz"
 * 1 1
 *
 * [1,2,3,4,5] [1,2,"Fizz",4,"Buzz"]
 */