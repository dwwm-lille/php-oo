<?php

namespace M2i\F1;
// Le namespace est déclaré avant la classe
// Il permet de "ranger" sa classe

class Formula
{
    public $name;
    public static $count = 0;
    public const WHEELS = 4;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++; // ou static::$count++;
    }

    public static function howMany()
    {
        return 'Sur la piste, il y a '.self::$count.' formules.';
    }

    public static function build($number)
    {
        return new Formula('F'.$number);
    }
}
