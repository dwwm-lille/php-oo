<?php

use M2i\Mvc\App;

require __DIR__.'/../vendor/autoload.php';

$app = new App();

// On a installé le var_dumper de Symfony
// dump([1, 2, 3]);

// On a installé les collections de Laravel
// $sum = collect([1, 2, 3, 4])->dump()->sum();
// dump($sum);

// On va définir toutes les routes / pages ici
$app->addRoutes([
    // @todo Créer une page d'accueil
    // Créer un HomeController avec une méthode index
    // Cette méthode doit retourner une vue ($this->render...)
    // Dans cette vue, on passera un paramètre qu'on affichera sur la page
    ['GET', '/', 'HomeController@index'],
    ['GET', '/les-films', 'MovieController@index'],
    ['GET', '/film/[i:id]', 'MovieController@show'],
    ['GET|POST', '/film/nouveau', 'MovieController@create'],

    ['GET', '/les-livres', 'BookController@index'],
    ['GET', '/livre/[i:id]', 'BookController@show'],
]);

$app->run();
