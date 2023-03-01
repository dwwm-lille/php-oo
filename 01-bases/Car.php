<?php

class Car
{
    public $brand;
    public $model;
    private $color;
    public $wheel = 4;
    private $fuel = 50;

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

    public function hasFuel()
    {
        return $this->fuel > 0;
    }

    public function drive()
    {
        $this->fuel -= 2;

        if ($this->fuel < 0) {
            $this->fuel = 0;
            return $this->name().' fait pied pied';
        }

        return $this->name().' fait vroom vroom';
    }

    public function fill($fuel = 50)
    {
        $this->fuel += $fuel;

        if ($this->fuel > 50) {
            $this->fuel = 50;
        }

        return $this;
    }

    public function klaxon()
    {
        return $this->name().' fait pouet pouet';
    }
}
