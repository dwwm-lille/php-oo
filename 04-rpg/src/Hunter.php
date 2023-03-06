<?php

class Hunter extends Character
{
    /**
     * Un chasseur peut chasser plusieurs personnages en même temps
     * avec le rest operator.
     */
    public function rangedAttack(Character ...$targets)
    {
        foreach ($targets as $target) {
            $this->pullHealth($target, $this->strength * 3);
        }

        // Je transforme mon tableau d'objets en tableau de chaines
        $names = array_map(function (Character $target) {
            return $target->getName();
        }, $targets);

        return $this->getName().' attaque à distance '.implode(', ', $names);
    }

    public function emoji()
    {
        return '🧜';
    }
}
