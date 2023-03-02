<?php

class Calculator
{
    private $result = 0;

    public function add($value)
    {
        $this->result += $value;

        return $this;
    }

    public function substract($value)
    {
        $this->result -= $value;

        return $this;
    }

    public function multiply($value)
    {
        $this->result *= $value;

        return $this;
    }

    public function divide($value)
    {
        $this->result /= $value;

        return $this;
    }

    public function result()
    {
        return round($this->result, 2);
    }
}
