<?php

abstract class Character
{
    private $name;
    private $health = 100;
    protected $strength = 10;
    protected $mana = 10;
    private $items = [];
    private $level = 1;
    private $experience = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name.' '.$this->emoji();
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getMana()
    {
        return $this->mana;
    }

    public function pick(Item $item)
    {
        $this->items[] = $item;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function restore()
    {
        foreach ($this->items as $index => $item) {
            if ($item->getName() === 'Potion') {
                $this->health += 10;
                unset($this->items[$index]);
                return;
            }
        }
    }

    public function attack(Character $target)
    {
        $this->pullHealth($target, $this->strength);

        return $this->log($target, 'attaque');
    }

    protected function pullHealth(Character $target, $value)
    {
        // Un personnage ne peut pas s'attaquer lui même
        if ($target === $this) {
            return;
        }

        $target->health -= $value;

        if ($target->health < 0) { // Evite un bug de santé négative
            $target->health = 0;
            $this->gainExperience();
        }

        return $this;
    }

    protected function gainExperience()
    {
        if (++$this->experience % 3 === 0) {
            $this->level++;
        }
    }

    protected function log(Character $target, $action)
    {
        if ($this === $target) {
            return $this->getName().' '.$action.' lui même (il est fou)';
        }

        return $this->getName().' '.$action.' '.$target->getName();
    }

    public function render()
    {
        ob_start(); ?>

        <h2 class="text-3xl">
            <?= $this->getName(); ?>
        </h2>
        <p>Santé: <?= $this->getHealth(); ?></p>
        <p>Force: <?= $this->getStrength(); ?></p>
        <p>Mana: <?= $this->getMana(); ?></p>

        <?php return ob_get_clean();
    }

    abstract public function emoji();
}
