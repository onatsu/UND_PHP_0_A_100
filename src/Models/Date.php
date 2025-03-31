<?php

namespace App\Models;

interface Date
{
    public function compare(Date $date): bool;
}