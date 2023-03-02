<?php

class Cat extends Animal
{
    private $retractableClaws;

    public function __construct($name, $retractableClaws = true)
    {
        parent::__construct($name); // On appelle le contructeur de Animal
        $this->retractableClaws = $retractableClaws;
    }

    public function move()
    {
        return parent::move().' silencieusement';
    }

    public function climbsOnRoof()
    {
        return $this->name.' grimpe sur le toit';
    }

    public function breathe()
    {
        return 'Le chat respire par son museau';
    }
}
