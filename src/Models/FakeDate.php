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
        return $this->date->format('Y-m-d') == $date->getRawDate()->format('Y-m-d');
    }

    public function getRawDate(): \DateTime
    {
        return $this->date;
    }
}