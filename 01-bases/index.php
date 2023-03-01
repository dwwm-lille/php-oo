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
