<?php

// Une classe
class Cat
{
    public $name;
    public $type = 'Chat de gouttière';
    public $fur;
    private $isChipped = false;

    public function __construct($name, $type = 'Chat de gouttière')
    {
        // Le constructeur est appelé quand on crée un chat
        // $this représente l'objet qui vient d'être créé
        // Ici, on initialise / hydrate les données de l'objet
        $this->name = $name;
        $this->type = $type;
    }

    public function cry()
    {
        return 'Miaou ! par '.$this->name;
    }

    public function chipWithDoctor()
    {
        $this->isChipped = true;
    }
}
