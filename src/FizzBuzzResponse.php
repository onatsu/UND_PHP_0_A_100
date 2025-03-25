<?php

namespace App;

class FizzBuzzResponse
{
    private bool $translated;
    private int $number;
    private ?string $string;

    public function __construct(bool $translated, int $number, string $string = null)
    {
        $this->translated = $translated;
        $this->number = $number;
        $this->string = $string;
    }
}