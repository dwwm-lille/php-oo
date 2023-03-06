<?php

use M2i\Mvc\App;

require __DIR__.'/../vendor/autoload.php';

$app = new App();

// On a installé le var_dumper de Symfony
// dump([1, 2, 3]);

// On a installé les collections de Laravel
// $sum = collect([1, 2, 3, 4])->dump()->sum();
// dump($sum);

$app->run();
