<?php

use App\Client;
use PHPUnit\Framework\TestCase;

class DefaultTest extends TestCase
{

    /** @test */
    public function playground()
    {
        $address = new \App\Address("mi casa");
        $addressB = new \App\Address("mi casa");

        $client = new \App\Client(1, $address);
        $clientB = new \App\Client(1, $addressB);

        $this->assertTrue($this->equals($client, $clientB));
    }

    public function changeValue($newValue, $var)
    {
        $var = $newValue;

        return $var;
    }

    public function changeId($newId, $client){
        $client->id = $newId;
    }

    public function sort($array){

    }

    public function equals($clientA, $clientB)
    {
        if($clientA->id !== $clientB->id)
        {
            return false;
        }

        if($clientA->address->addressLine !== $clientB->address->addressLine)
        {
            return false;
        }

        return true;
    }

}