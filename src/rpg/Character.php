<?php

namespace App\rpg;

class Character
{
    private Health $health;
    private Status $status;
    private Level $level;
    private Name $name;

    private function __construct(Health $health, Status $status, Level $level, Name $name){
        $this->health=$health;
        $this->status=$status;
        $this->level=$level;
        $this->name=$name;
    }

    public static function createDefaultCharacter(string $name){
        return new Character(name:new Name($name), status:new Status(), level:new Level(), health:new Health());
    }

    public function damage(int $damagePoints)
    {
        $this->health->decrease($damagePoints);

        if(!$this->health->haveLife()) {
            $this->status->die();
        }
    }

    public function heal(int $healPoints)
    {
        $this->health->increase($healPoints);

        if(!$this->health->haveLife()) {
            $this->status->die();
        }
    }



    public function getName(){
        return $this->name->getName();
    }

    public function getHealth(){
        return $this->health->getPoints();
    }

    public function getStatus(){
        return $this->status;
    }
}