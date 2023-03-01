<?php

require __DIR__.'/Cat.php';

// Un objet (instance d'une classe)
$bianca = new Cat('Bianca');
// $bianca->name = 'Bianca';
// $bianca->fur = 'blanc';
$bianca->setFur('blanc');
$mina = new Cat('Mina', 'Siamois');
// $mina->fur = 'noir';
$mina->setFur('noir')
     ->chipWithDoctor(); // Setter sur une propriété privée

var_dump($bianca);
var_dump($mina);

?>

<h1>Mon premier chat s'appelle <?= $bianca->name; ?></h1>
<p>Il peut faire <?= $bianca->cry(); ?></p>
<p>L'autre chat <?= $mina->name; ?> peut aussi faire <?= $mina->cry(); ?></p>

<p>Etat de Mina: <?= $mina->chippedInformation(); ?></p>
<p>Couleur de Mina: <?= $mina->getFur(); ?></p>

<p><?= $bianca->playWith($mina); ?></p>
<p><?= $mina->playWith($bianca); ?></p>

<h2>Exercice classe Car</h2>
<?php
require __DIR__.'/Car.php';

$alfa = new Car('Alfa', 'Rodéo', 'Grise');
$bmw = new Car('BM', 'Double Pied', 'Noire');

// On repeint la voiture
$alfa->setColor('Rouge');
?>

<p><?= $alfa->drive(); ?> et <?= $alfa->klaxon(); ?></p>
<p><?= $bmw->drive(); ?> et <?= $bmw->klaxon(); ?></p>

<p>La voiture 1 est <?= $alfa->getColor(); ?>, c'est un(e) <?= $alfa->name(); ?></p>
<p>La voiture 2 est <?= $bmw->getColor(); ?>, c'est un(e) <?= $bmw->name(); ?></p>
