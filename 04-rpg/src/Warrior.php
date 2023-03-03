<?php

class Warrior extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->strength *= 2;
    }

    public function attack(Character $target)
    {
        $this->pullHealth($target, $this->strength * 2);

        return $this->log($target, 'attaque');

        // Je pourrais aussi appeler 2 fois la méthode parente
        // parent::attack($target);

        // return parent::attack($target);
    }

    public function emoji()
    {
        return '🥷';
    }
}
