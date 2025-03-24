<?php

namespace App;

class Client
{
    public $id;
    public Address $address;

    public static $counter = 0;

    public function __construct(int $id, Address $address )
    {
        $this->id = $id;
        $this->address = $address;
        self::$counter = self::$counter + 1;
    }

    public static function incrementCounter()
    {
        self::$counter = self::$counter + 1;
    }

    public static function createClient(Address $address)
    {
        return new Client(self::$counter + 1, $address);
    }

    public static function createDefaultAddressClient()
    {
        $address = new Address("default");
        return new Client(self::$counter + 1, $address);
    }
}