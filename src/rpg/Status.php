<?php

namespace App\rpg;

class Status
{
    private bool $isAlive = true;
    public function __construct()
    {
    }

    public function die()
    {
        $this->isAlive = false;
    }
}