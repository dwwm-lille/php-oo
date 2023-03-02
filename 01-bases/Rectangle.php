<?php

class Rectangle
{
    private $width;
    private $length;

    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function perimeter()
    {
        if (! $this->isValid()) {
            return 'Le rectangle n\'est pas valide.';
        }

        return ($this->width + $this->length) * 2;
    }

    public function area()
    {
        return $this->width * $this->length;
    }

    public function isValid()
    {
        return $this->width > 0 && $this->length > 0;
    }
}
