<?php

namespace App\Models;

use App\Models\Date;

class PHPDate implements Date
{

    private $rawDate;

    public function __construct(string $date)
    {
        $this->rawDate = new \DateTime($date);
    }

    public function compare(Date $date): bool
    {
        return $this->rawDate->format('Y-m-d') == $date->getRawDate()->format('Y-m-d');
    }

    public function getRawDate(): \DateTime
    {
        return $this->rawDate;
    }
}