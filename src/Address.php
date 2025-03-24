<?php

namespace App;

class Address
{

    public string $addressLine;

    public function __construct(string $addressLine)
    {
        $this->addressLine = $addressLine;
    }
}