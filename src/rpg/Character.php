<?php

namespace App\rpg;

class Character
{
    public Health $health;
    public Status $status;
    public Level $level;
    public Name $name;

    public function damage(int $damagePoints)
    {
        $this->health->decrease($damagePoints);

        if(!$this->health->haveLife()) {
            $this->status->die();
        }
    }
}