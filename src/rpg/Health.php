<?php

namespace App\rpg;

class Health
{
    const int MAXIMUM_VALUE = 1000;
    const int MINIMUM_VALUE = 0;
    private int $life;

    public function __construct(int $healthValue)
    {
        $this->life = $healthValue;
        if ($healthValue > self::MAXIMUM_VALUE) {
            $this->life = self::MAXIMUM_VALUE;
        }

        $this->checkMin($healthValue);
    }

    public function decrease(int $damagePoints)
    {
        $this->life -= $damagePoints;
        $this->checkMin($this->life);
    }

    public function getPoints()
    {
        return $this->life;
    }

    /**
     * @param int $healthValue
     * @return void
     */
    private function checkMin(int $healthValue): void
    {
        if ($healthValue < self::MINIMUM_VALUE) {
            $this->life = self::MINIMUM_VALUE;
        }
    }

    public function haveLife()
    {
        if($this->life <= self::MINIMUM_VALUE)
        {
            return false;
        }

        return true;
    }

}