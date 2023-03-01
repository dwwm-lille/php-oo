<?php

class Car
{
    public $brand;
    public $model;
    private $color;
    public $wheel = 4;

    public function __construct($brand, $model, $color = 'Blanche')
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getColor()
    {
        return strtolower($this->color);
    }

    public function name()
    {
        return $this->brand.' '.$this->model;
    }

    public function drive()
    {
        return $this->name().' fait vroom vroom';
    }

    public function klaxon()
    {
        return $this->name().' fait pouet pouet';
    }
}
