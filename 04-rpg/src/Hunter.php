<?php

class Hunter extends Character
{
    public function rangedAttack(Character $target)
    {
        $this->pullHealth($target, $this->strength * 3);

        return $this->log($target, 'attaque à distance');
    }

    public function emoji()
    {
        return '🧜';
    }
}
