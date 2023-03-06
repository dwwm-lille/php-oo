<?php

// Require toutes les classes d'un seul coup
spl_autoload_register(function ($class) {
    // Je "triche" sur le nom de la classe
    // M2i\F1 correspond à src
    $class = str_replace('M2i\\F1\\', '', $class);

    require __DIR__.'/src/'.$class.'.php';
});

use M2i\F1\Formula;

$f1 = new Formula('F1');
echo Formula::$count.'<br />'; // 1
$f2 = new Formula('F2');
$f3 = new Formula('F3');
echo Formula::$count.'<br />'; // 3
echo Formula::howMany().'<br />';
echo Formula::WHEELS.' roues <br />';
$f1 = Formula::build(12);
var_dump($f1);
var_dump($f2);
var_dump($f3);
