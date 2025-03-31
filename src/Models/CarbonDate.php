<?php

namespace App\Models;

use App\Models\Date;

class CarbonDate implements Date
{

    public function compare(Date $date): bool
    {
        return true;
    }
}