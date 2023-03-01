<?php

// Une classe
class Cat
{
    public $name;
    public $type = 'Chat de gouttière';
    private $fur;
    private $isChipped = false;

    public function __construct($name, $type = 'Chat de gouttière')
    {
        // Le constructeur est appelé quand on crée un chat
        // $this représente l'objet qui vient d'être créé
        // Ici, on initialise / hydrate les données de l'objet
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Getter qui permet d'accèder à une propriété privée
     */
    public function getFur()
    {
        return $this->fur;
    }

    /**
     * Setter permet de modifier une propriété privée
     */
    public function setFur($fur)
    {
        $this->fur = $fur;

        return $this;
    }

    /**
     * Getter "custom"
     */
    public function chippedInformation()
    {
        if ($this->isChipped) {
            return $this->name.' est pucé(e).';
        }

        return $this->name.' n\'est pas pucé(e).';
    }

    /**
     * Setter "custom"
     */
    public function chipWithDoctor()
    {
        $this->isChipped = true;

        return $this;
    }

    public function cry()
    {
        return 'Miaou ! par '.$this->name;
    }

    /**
     * Permet de jouer avec un autre chat
     * On peut typer les arguments avec le nom d'une classe
     * pour forcer cet argument à être un Cat.
     */
    public function playWith(Cat $otherCat)
    {
        return $this->name.' joue avec '.$otherCat->name;
    }
}
