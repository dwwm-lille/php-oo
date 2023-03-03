<?php

class Magus extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->mana *= 2;
    }

    public function castSpell(Character $target)
    {
        $this->pullHealth($target, $this->mana * 3);

        return $this->log($target, 'lance un sort à ');
    }

    public function emoji()
    {
        return '🧙';
    }
}
