<?php

require __DIR__.'/src/Animal.php';
require __DIR__.'/src/Cat.php';
require __DIR__.'/src/Dog.php';
require __DIR__.'/src/Kennel.php';

$cat = new Cat('Bianca', false);
var_dump($cat);

$dog = new Dog('Milou');
var_dump($dog);

$kennel = new Kennel();
$kennel->keep($cat)->keep($dog);
var_dump($kennel);

// $a = new Animal('toto');

?>

<p><?= $cat->move(); ?></p>
<p><?= $cat->climbsOnRoof(); ?></p>
<p><?= $dog->move(); ?></p>
