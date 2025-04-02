<?php

namespace App\rpg;

class Level
{
    private int $level;

    public function __construct(int $level=1)
    {
        $this->level = $level;
    }

    public int $actualLevel = 1;
}