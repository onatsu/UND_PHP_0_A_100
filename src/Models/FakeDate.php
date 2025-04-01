<?php

namespace App\Models;

use DateTime;

class FakeDate implements Date
{
    public $date;

    public function __construct()
    {
        $this->date = new DateTime("1982/10/08");
    }

    public function compare(Date $date): bool
    {
        return true;
    }

    public function getRawDate(): \DateTime
    {
        return $this->date;
    }
}